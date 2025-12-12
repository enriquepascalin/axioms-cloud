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

use App\Repository\DownloadRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: DownloadRepository::class)]
#[ORM\Table(name: 'download')]
#[ORM\Index(name: 'idx_download_spec_version', fields: ['specVersion'])]
#[ORM\Index(name: 'idx_download_label', fields: ['label'])]
#[Broadcast]
class Download
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Label is required.')]
    #[Assert\Length(max: 255, maxMessage: 'Label must be at most {{ limit }} characters.')]
    private ?string $label = null;

    // Prefer long URL capacity; validate format & length
    #[ORM\Column(length: 1024, nullable: true)]
    #[Assert\Url(message: 'Provide a valid URL.')]
    #[Assert\Length(max: 1024, maxMessage: 'URL must be at most {{ limit }} characters.')]
    private ?string $url = null;

    // Human-readable size, e.g. "12 MB", "512KiB", "1.2 GB"
    #[ORM\Column(length: 32, nullable: true)]
    #[Assert\Length(max: 32, maxMessage: 'Size must be at most {{ limit }} characters.')]
    #[Assert\Regex(
        pattern: '/^\d+(?:\.\d+)?\s?(?:B|KB|MB|GB|TB|KiB|MiB|GiB|TiB)$/i',
        message: 'Size must look like "12 MB", "512KiB", "1.2 GB", etc.'
    )]
    private ?string $size = null;

    // Lookup to the owning specification version (cascade deletes)
    #[ORM\ManyToOne(inversedBy: 'downloads')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Specification version is required.')]
    private ?SpecVersion $specVersion = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function getLabel(): ?string {
        return $this->label;
    }

    public function setLabel(string $label): static {
        $this->label = $label; return $this;
    }

    public function getUrl(): ?string {
        return $this->url;
    }

    public function setUrl(?string $url): static {
        $this->url = $url; return $this;
    }

    public function getSize(): ?string {
        return $this->size;
    }

    public function setSize(?string $size): static {
        $this->size = $size; return $this;
    }

    public function getSpecVersion(): ?SpecVersion {
        return $this->specVersion;
    }

    public function setSpecVersion(?SpecVersion $specVersion): static {
        $this->specVersion = $specVersion; return $this;
    }
}
