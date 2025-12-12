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

use App\Enum\ContractArtifactFormat;
use App\Enum\ContractArtifactType;
use App\Repository\ContractArtifactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ContractArtifactRepository::class)]
#[ORM\Table(name: 'contract_artifact')]
#[ORM\Index(name: 'idx_contract_spec_version', fields: ['specVersion'])]
#[ORM\Index(name: 'idx_contract_format', fields: ['format'])]
#[ORM\Index(name: 'idx_contract_type', fields: ['type'])]
#[Broadcast]
class ContractArtifact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * Long URLs to remote artifacts.
     */
    #[ORM\Column(length: 1024)]
    #[Assert\NotBlank(message: 'URL is required.')]
    #[Assert\Url(message: 'Provide a valid URL.')]
    #[Assert\Length(max: 1024, maxMessage: 'URL must be at most {{ limit }} characters.')]
    private ?string $url = null;

    /**
     * Artifact file format (e.g., JSON, YAML, AVRO).
     * 
     * @see ContractArtifactFormat
     */
    #[ORM\Column(enumType: ContractArtifactFormat::class)]
    #[Assert\NotNull(message: 'Format is required.')]
    private ?ContractArtifactFormat $format = null;

    /**
     * Artifact kind (e.g., schema, example, contract).
     * 
     * @see ContractArtifactType
     */
    #[ORM\Column(enumType: ContractArtifactType::class)]
    #[Assert\NotNull(message: 'Type is required.')]
    private ?ContractArtifactType $type = null;

    #[ORM\Column(length: 128, nullable: true)]
    #[Assert\Length(max: 128, maxMessage: 'Checksum must be at most {{ limit }} characters.')]
    private ?string $checksum = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    /**
     * Owning side – artifacts are tied to a specific spec version.
     */
    #[ORM\ManyToOne(inversedBy: 'artifacts')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Specification version is required.')]
    private ?SpecVersion $specVersion = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function getUrl(): ?string {
        return $this->url;
    }

    public function setUrl(string $url): static {
        $this->url = $url; return $this;
    }

    public function getFormat(): ?ContractArtifactFormat {
        return $this->format;
    }

    public function setFormat(ContractArtifactFormat $format): static {
        $this->format = $format; return $this;
    }

    public function getType(): ?ContractArtifactType {
        return $this->type;
    }

    public function setType(ContractArtifactType $type): static {
        $this->type = $type; return $this;
    }

    public function getChecksum(): ?string {
        return $this->checksum;
    }

    public function setChecksum(?string $checksum): static {
        $this->checksum = $checksum; return $this;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    public function setDescription(?string $description): static {
        $this->description = $description; return $this;
    }

    public function getSpecVersion(): ?SpecVersion {
        return $this->specVersion;
    }

    public function setSpecVersion(?SpecVersion $specVersion): static {
        $this->specVersion = $specVersion; return $this;
    }
}
