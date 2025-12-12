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

use App\Repository\SpecificationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: SpecificationRepository::class)]
#[ORM\Table(name: 'specification')]
#[ORM\Index(name: 'idx_spec_title', fields: ['title'])]
#[ORM\Index(name: 'idx_spec_created_at', fields: ['createdAt'])]
#[UniqueEntity(fields: ['slug'], message: 'This slug is already in use.')]
#[ORM\HasLifecycleCallbacks]
#[Broadcast]
class Specification
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[Assert\Length(min: 3, max: 200)]
    #[ORM\Column(length: 200)]
    private ?string $title = null;

    // DB-level uniqueness + validator above
    #[Assert\NotBlank]
    #[Assert\Length(max: 255)]
    #[Assert\Regex(
        pattern: '/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
        message: 'Slug must be lowercase, alphanumeric, and may contain hyphens.'
    )]
    #[ORM\Column(length: 255, unique: true)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $abstract = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    /**
     * SpecVersion owns the relation via SpecVersion::$specification
     * Non-nullable FK there; orphanRemoval here will delete orphans on flush.
     *
     * @var Collection<int, SpecVersion>
     */
    #[ORM\OneToMany(
        targetEntity: SpecVersion::class,
        mappedBy: 'specification',
        orphanRemoval: true
    )]
    private Collection $versions;

    // Unidirectional owning side. When the referenced version is deleted, set NULL here.
    #[ORM\OneToOne]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL', unique: true)]
    private ?SpecVersion $defaultVersion = null;

    public function __construct()
    {
        $this->versions = new ArrayCollection();
    }

    public function __toString(): string
    {
        return (string) ($this->title ?? 'Specification #'.$this->id);
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

    public function getAbstract(): ?string {
        return $this->abstract;
    }

    public function setAbstract(?string $abstract): static {
        $this->abstract = $abstract; return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable {
        return $this->updatedAt;
    }

    #[ORM\PrePersist]
    public function setCreatedAtValue(): void {
        $this->createdAt ??= new \DateTimeImmutable();
        $this->updatedAt = $this->createdAt;
    }

    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void {
        $this->updatedAt = new \DateTimeImmutable();
    }

    /** @return Collection<int, SpecVersion> */
    public function getVersions(): Collection {
        return $this->versions;
    }

    public function addVersion(SpecVersion $version): static {
        if (!$this->versions->contains($version)) {
            $this->versions->add($version);
            $version->setSpecification($this);
        }
        return $this;
    }

    public function removeVersion(SpecVersion $version): static {
        $this->versions->removeElement($version);
        return $this;
    }

    public function getDefaultVersion(): ?SpecVersion {
        return $this->defaultVersion;
    }

    public function setDefaultVersion(?SpecVersion $defaultVersion): static {
        if ($defaultVersion && $defaultVersion->getSpecification() !== $this) {
            throw new \InvalidArgumentException('Default version must belong to this specification.');
        }
        $this->defaultVersion = $defaultVersion; return $this;
    }
}
