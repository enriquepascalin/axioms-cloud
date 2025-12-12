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

use App\Enum\SpecVersionStatus;
use App\Repository\SpecVersionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: SpecVersionRepository::class)]
#[ORM\Table(name: 'spec_version')]
#[ORM\UniqueConstraint(name: 'uniq_specification_version', columns: ['specification_id','version'])]
#[ORM\Index(name: 'idx_sv_specification', columns: ['specification_id'])]
#[ORM\Index(name: 'idx_sv_status', fields: ['status'])]
#[ORM\Index(name: 'idx_sv_release_date', fields: ['releaseDate'])]
#[ORM\Index(name: 'idx_sv_version', fields: ['version'])]
#[UniqueEntity(fields: ['specification','version'], message: 'This version already exists for the specification.')]
#[Broadcast]
class SpecVersion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'versions')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Specification is required.')]
    private ?Specification $specification = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: 'Version is required.')]
    #[Assert\Length(max: 50, maxMessage: 'Version must be at most {{ limit }} characters.')]
    #[Assert\Regex(
        pattern: '/^v?\d+(?:\.\d+){0,2}(?:-[0-9A-Za-z.-]+)?(?:\+[0-9A-Za-z.-]+)?$/',
        message: 'Version must follow a semantic-like format (e.g., "1.0.0", "v2.1.3-beta").'
    )]
    private ?string $version = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $releaseDate = null;

    /**
     * @see SpecVersionStatus
     */
    #[ORM\Column(enumType: SpecVersionStatus::class)]
    #[Assert\NotNull(message: 'Status is required.')]
    private ?SpecVersionStatus $status = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observability = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $changelog = null;

    /** @var Collection<int, ContractArtifact> */
    #[ORM\OneToMany(targetEntity: ContractArtifact::class, mappedBy: 'specVersion')]
    private Collection $artifacts;

    /** @var Collection<int, AxiomEvidence> */
    #[ORM\OneToMany(targetEntity: AxiomEvidence::class, mappedBy: 'specVersion')]
    private Collection $evidence;

    /** @var Collection<int, ConformanceRun> */
    #[ORM\OneToMany(targetEntity: ConformanceRun::class, mappedBy: 'specVersion')]
    private Collection $conformanceRuns;

    /** @var Collection<int, Download> */
    #[ORM\OneToMany(targetEntity: Download::class, mappedBy: 'specVersion')]
    private Collection $downloads;

    /** @var Collection<int, Resource> */
    #[ORM\OneToMany(targetEntity: Resource::class, mappedBy: 'specVersion')]
    private Collection $resources;

    public function __construct()
    {
        $this->artifacts = new ArrayCollection();
        $this->evidence = new ArrayCollection();
        $this->conformanceRuns = new ArrayCollection();
        $this->downloads = new ArrayCollection();
        $this->resources = new ArrayCollection();
    }

    public function __toString(): string
    {
        return ($this->specification?->getTitle() ?? 'Spec') . ' ' . ($this->version ?? '');
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getSpecification(): ?Specification {
        return $this->specification;
    }

    public function setSpecification(?Specification $specification): static {
        $this->specification = $specification; return $this;
    }

    public function getVersion(): ?string {
        return $this->version;
    }

    public function setVersion(string $version): static {
        $this->version = $version; return $this;
    }

    public function getReleaseDate(): ?\DateTimeImmutable {
        return $this->releaseDate;
    }

    public function setReleaseDate(?\DateTimeImmutable $releaseDate): static {
        $this->releaseDate = $releaseDate; return $this;
    }

    public function getObservability(): ?string {
        return $this->observability;
    }

    public function setObservability(?string $observability): static {
        $this->observability = $observability; return $this;
    }

    public function getChangelog(): ?string {
        return $this->changelog;
    }

    public function setChangelog(?string $changelog): static {
        $this->changelog = $changelog; return $this;
    }

    /** @return Collection<int, ContractArtifact> */
    public function getArtifacts(): Collection {
        return $this->artifacts;
    }

    public function addArtifact(ContractArtifact $artifact): static {
        if (!$this->artifacts->contains($artifact)) {
            $this->artifacts->add($artifact);
            $artifact->setSpecVersion($this);
        }
        return $this;
    }

    public function removeArtifact(ContractArtifact $artifact): static {
        $this->artifacts->removeElement($artifact);
        return $this;
    }

    /** @return Collection<int, AxiomEvidence> */
    public function getEvidence(): Collection {
        return $this->evidence;
    }

    public function addEvidence(AxiomEvidence $e): static {
        if (!$this->evidence->contains($e)) {
            $this->evidence->add($e);
            $e->setSpecVersion($this);
        }
        return $this;
    }

    public function removeEvidence(AxiomEvidence $e): static {
        $this->evidence->removeElement($e);
        return $this;
    }

    /** @return Collection<int, ConformanceRun> */
    public function getConformanceRuns(): Collection {
        return $this->conformanceRuns;
    }

    public function addConformanceRun(ConformanceRun $run): static {
        if (!$this->conformanceRuns->contains($run)) {
            $this->conformanceRuns->add($run);
            $run->setSpecVersion($this);
        }
        return $this;
    }

    public function removeConformanceRun(ConformanceRun $run): static {
        $this->conformanceRuns->removeElement($run);
        return $this;
    }

    /** @return Collection<int, Download> */
    public function getDownloads(): Collection {
        return $this->downloads;
    }

    public function addDownload(Download $download): static {
        if (!$this->downloads->contains($download)) {
            $this->downloads->add($download);
            $download->setSpecVersion($this);
        }
        return $this;
    }

    public function removeDownload(Download $download): static {
        $this->downloads->removeElement($download);
        return $this;
    }

    /** @return Collection<int, Resource> */
    public function getResources(): Collection {
        return $this->resources;
    }

    public function addResource(Resource $resource): static {
        if (!$this->resources->contains($resource)) {
            $this->resources->add($resource);
            $resource->setSpecVersion($this);
        }
        return $this;
    }

    public function removeResource(Resource $resource): static {
        if ($this->resources->removeElement($resource) && $resource->getSpecVersion() === $this) {
            $resource->setSpecVersion(null);
        }
        return $this;
    }

    public function getStatus(): ?SpecVersionStatus {
        return $this->status;
    }

    public function setStatus(SpecVersionStatus $status): static {
        $this->status = $status; return $this;
    }
}
