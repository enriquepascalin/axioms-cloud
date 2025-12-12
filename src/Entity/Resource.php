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

use App\Enum\ResourceType;
use App\Repository\ResourceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ResourceRepository::class)]
#[ORM\Table(name: 'resource')]
#[ORM\UniqueConstraint(name: 'uniq_resource_slug', fields: ['slug'])]
#[ORM\Index(name: 'idx_resource_type', fields: ['type'])]
#[ORM\Index(name: 'idx_resource_spec_version', fields: ['specVersion'])]
#[ORM\Index(name: 'idx_resource_created_at', fields: ['created_at'])]
#[ORM\Index(name: 'idx_resource_feature_order', fields: ['featureOrder'])]
#[ORM\Index(name: 'idx_resource_title', fields: ['title'])]
#[UniqueEntity(fields: ['slug'], message: 'Slug must be unique.')]
#[ORM\HasLifecycleCallbacks]
#[Broadcast]
class Resource
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Title is required.')]
    #[Assert\Length(max: 255, maxMessage: 'Title must be at most {{ limit }} characters.')]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Slug is required.')]
    #[Assert\Length(max: 255, maxMessage: 'Slug must be at most {{ limit }} characters.')]
    #[Assert\Regex(
        pattern: '/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
        message: 'Slug can contain lowercase letters, numbers, and hyphens; no spaces or uppercase.'
    )]
    private ?string $slug = null;

    #[ORM\Column(enumType: ResourceType::class)]
    #[Assert\NotNull(message: 'Type is required.')]
    private ?ResourceType $type = null;

    // allow long URLs
    #[ORM\Column(length: 1024, nullable: true)]
    #[Assert\Url(message: 'Provide a valid URL.')]
    #[Assert\Length(max: 1024, maxMessage: 'URL must be at most {{ limit }} characters.')]
    private ?string $url = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    #[Assert\PositiveOrZero(message: 'Feature order must be zero or positive.')]
    private ?int $featureOrder = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'Creation timestamp is required.')]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updated_at = null;

    // Optional association to a specific spec version. If that version is deleted, remove the resource.
    #[ORM\ManyToOne(inversedBy: 'resources')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
    private ?SpecVersion $specVersion = null;

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
        return $this->title ?? $this->slug ?? '';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(string $title): static {
        $this->title = $title; return $this;
    }

    public function getSlug(): ?string {
        return $this->slug;
    }

    public function setSlug(string $slug): static {
        $this->slug = $slug; return $this;
    }

    public function getType(): ?ResourceType {
        return $this->type;
    }

    public function setType(ResourceType $type): static {
        $this->type = $type; return $this;
    }

    public function getUrl(): ?string {
        return $this->url;
    }

    public function setUrl(?string $url): static {
        $this->url = $url; return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): static {
        $this->description = $description; return $this;
    }

    public function getFeatureOrder(): ?int {
        return $this->featureOrder;
    }

    public function setFeatureOrder(?int $featureOrder): static {
        $this->featureOrder = $featureOrder; return $this;
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

    public function getSpecVersion(): ?SpecVersion {
        return $this->specVersion;
    }

    public function setSpecVersion(?SpecVersion $specVersion): static {
        $this->specVersion = $specVersion; return $this;
    }
}
