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

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
#[ORM\Table(name: 'project')]
#[ORM\Index(name: 'idx_project_name', fields: ['name'])]
#[ORM\Index(name: 'idx_project_slug', fields: ['slug'])]
#[UniqueEntity(fields: ['slug'], message: 'Slug must be unique.')]
#[Broadcast]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Name is required.')]
    #[Assert\Length(max: 255, maxMessage: 'Name must be at most {{ limit }} characters.')]
    private ?string $name = null;

    #[ORM\Column(length: 255, unique: true)]
    #[Assert\NotBlank(message: 'Slug is required.')]
    #[Assert\Length(max: 255, maxMessage: 'Slug must be at most {{ limit }} characters.')]
    #[Assert\Regex(
        pattern: '/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
        message: 'Slug can contain lowercase letters, numbers, and hyphens; no spaces or uppercase.'
    )]
    private ?string $slug = null;

    #[ORM\Column(length: 1024, nullable: true)]
    #[Assert\Url(message: 'Provide a valid URL.')]
    #[Assert\Length(max: 1024, maxMessage: 'URL must be at most {{ limit }} characters.')]
    private ?string $url = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    public function __toString(): string
    {
        return $this->name ?? $this->slug ?? '';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function setName(string $name): static {
        $this->name = $name; return $this;
    }

    public function getSlug(): ?string {
        return $this->slug;
    }

    public function setSlug(string $slug): static {
        $this->slug = $slug; return $this;
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
}
