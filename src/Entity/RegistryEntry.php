<?php
/**
 * AXIOMS CLOUD
 *
 * SPDX-License-Identifier: Apache-2.0 
 * © 2025 by Enrique Regis Pascalin Romo <enrique.pascalin@proton.me>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace App\Entity;

use App\Enum\RegistryEntryStatus;
use App\Enum\RegistryEntryType;
use App\Repository\RegistryEntryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: RegistryEntryRepository::class)]
#[ORM\Table(name: 'registry_entry')]
#[ORM\UniqueConstraint(name: 'uniq_registry_key', fields: ['key'])]
#[ORM\Index(name: 'idx_registry_type', fields: ['type'])]
#[ORM\Index(name: 'idx_registry_status', fields: ['status'])]
#[ORM\Index(name: 'idx_registry_name', fields: ['name'])]
#[ORM\Index(name: 'idx_registry_created_at', fields: ['created_at'])]
#[UniqueEntity(fields: ['key'], message: 'Key must be unique.')]
#[ORM\HasLifecycleCallbacks]
#[Broadcast]
class RegistryEntry
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // identifier within the registry (unique)
    #[ORM\Column(length: 128)]
    #[Assert\NotBlank(message: 'Key is required.')]
    #[Assert\Length(max: 128, maxMessage: 'Key must be at most {{ limit }} characters.')]
    #[Assert\Regex(
        pattern: '/^[A-Za-z0-9._:-]+$/',
        message: 'Key may contain letters, digits, dot, underscore, colon, and dash.'
    )]
    private ?string $key = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(max: 255, maxMessage: 'Name must be at most {{ limit }} characters.')]
    private ?string $name = null;

    #[ORM\Column(enumType: RegistryEntryType::class)]
    #[Assert\NotNull(message: 'Type is required.')]
    private ?RegistryEntryType $type = null;

    #[ORM\Column(enumType: RegistryEntryStatus::class)]
    #[Assert\NotNull(message: 'Status is required.')]
    private ?RegistryEntryStatus $status = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    // e.g. ms, B, MB, %, etc.
    #[ORM\Column(length: 32, nullable: true)]
    #[Assert\Length(max: 32, maxMessage: 'Unit must be at most {{ limit }} characters.')]
    private ?string $unit = null;

    // arbitrary labels/metadata
    #[ORM\Column(type: Types::JSON, nullable: true)]
    #[Assert\Type(type: 'array', message: 'Labels JSON must decode to an array.')]
    private ?array $labelsJson = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'Creation timestamp is required.')]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\PrePersist]
    public function onPrePersist(): void
    {
        if ($this->created_at === null) {
            $this->created_at = new \DateTimeImmutable();
        }
    }

    #[ORM\PreUpdate]
    public function onPreUpdate(): void
    {
        $this->updated_at = new \DateTimeImmutable();
    }

    public function __toString(): string
    {
        return $this->name ?? $this->key ?? '';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getKey(): ?string {
        return $this->key;
    }

    public function setKey(string $key): static {
        $this->key = $key; return $this;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(?string $name): static {
        $this->name = $name; return $this;
    }

    public function getType(): ?RegistryEntryType {
        return $this->type;
    }

    public function setType(RegistryEntryType $type): static {
        $this->type = $type; return $this;
    }

    public function getStatus(): ?RegistryEntryStatus {
        return $this->status;
    }

    public function setStatus(RegistryEntryStatus $status): static {
        $this->status = $status; return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): static {
        $this->description = $description; return $this;
    }

    public function getUnit(): ?string {
        return $this->unit;
    }

    public function setUnit(?string $unit): static {
        $this->unit = $unit; return $this;
    }

    public function getLabelsJson(): ?array {
        return $this->labelsJson;
    }

    public function setLabelsJson(?array $labelsJson): static {
        $this->labelsJson = $labelsJson; return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static {
        $this->created_at = $created_at; return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updated_at): static {
        $this->updated_at = $updated_at; return $this;
    }
}
