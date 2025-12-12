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

use App\Enum\ConformanceProfile;
use App\Enum\ConformanceRunStatus;
use App\Repository\ConformanceRunRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: ConformanceRunRepository::class)]
#[ORM\Table(name: 'conformance_run')]
#[ORM\Index(name: 'idx_conf_status', fields: ['status'])]
#[ORM\Index(name: 'idx_conf_profile', fields: ['profile'])]
#[ORM\Index(name: 'idx_conf_spec_version', columns: ['spec_version_id'])]
#[ORM\Index(name: 'idx_conf_run_at', fields: ['runAt'])]
#[Assert\Expression(
    "this.getTotal() === null or this.getPassed() === null or this.getPassed() <= this.getTotal()",
    message: "Passed tests cannot exceed total tests."
)]
#[Broadcast]
class ConformanceRun
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * How many tests passed in this run.
     */
    #[ORM\Column]
    #[Assert\NotNull(message: 'Passed count is required.')]
    #[Assert\PositiveOrZero(message: 'Passed must be zero or positive.')]
    private ?int $passed = null;

    /**
     * Total tests executed in this run.
     */
    #[ORM\Column]
    #[Assert\NotNull(message: 'Total count is required.')]
    #[Assert\PositiveOrZero(message: 'Total must be zero or positive.')]
    private ?int $total = null;

    /**
     * @see ConformanceRunStatus
     */
    #[ORM\Column(enumType: ConformanceRunStatus::class)]
    #[Assert\NotNull(message: 'Status is required.')]
    private ?ConformanceRunStatus $status = null;

    /**
     * @see ConformanceProfile
     */
    #[ORM\Column(enumType: ConformanceProfile::class)]
    #[Assert\NotNull(message: 'Profile is required.')]
    private ?ConformanceProfile $profile = null;

    /**
     * Optional link to a detailed report for this run.
     */
    #[ORM\Column(length: 1024, nullable: true)]
    #[Assert\Url(message: 'Provide a valid report URL.')]
    #[Assert\Length(max: 1024, maxMessage: 'Report URL must be at most {{ limit }} characters.')]
    private ?string $reportUrl = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    /**
     * Timestamp when the run occurred.
     */
    #[ORM\Column]
    #[Assert\NotNull(message: 'Run timestamp is required.')]
    private ?\DateTimeImmutable $runAt = null;

    /**
     * Parent specification version for this run.
     */
    #[ORM\ManyToOne(inversedBy: 'conformanceRuns')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Specification version is required.')]
    private ?SpecVersion $specVersion = null;

    /**
     * @var Collection<int, AxiomEvidence>
     */
    #[ORM\OneToMany(targetEntity: AxiomEvidence::class, mappedBy: 'conformanceRun')]
    private Collection $axiomEvidence;

    public function __construct()
    {
        $this->axiomEvidence = new ArrayCollection();
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getPassed(): ?int {
        return $this->passed;
    }

    public function setPassed(int $passed): static {
        $this->passed = $passed; return $this;
    }

    public function getTotal(): ?int {
        return $this->total;
    }

    public function setTotal(int $total): static {
        $this->total = $total; return $this;
    }

    public function getStatus(): ?ConformanceRunStatus {
        return $this->status;
    }

    public function setStatus(ConformanceRunStatus $status): static {
        $this->status = $status; return $this;
    }

    public function getProfile(): ?ConformanceProfile {
        return $this->profile;
    }

    public function setProfile(ConformanceProfile $profile): static {
        $this->profile = $profile; return $this;
    }

    public function getReportUrl(): ?string {
        return $this->reportUrl;
    }

    public function setReportUrl(?string $reportUrl): static {
        $this->reportUrl = $reportUrl; return $this;
    }

    public function getNotes(): ?string {
        return $this->notes;
    }

    public function setNotes(?string $notes): static {
        $this->notes = $notes; return $this;
    }

    public function getRunAt(): ?\DateTimeImmutable {
        return $this->runAt;
    }

    public function setRunAt(\DateTimeImmutable $runAt): static {
        $this->runAt = $runAt; return $this;
    }

    public function getSpecVersion(): ?SpecVersion {
        return $this->specVersion;
    }

    public function setSpecVersion(?SpecVersion $specVersion): static {
        $this->specVersion = $specVersion; return $this;
    }

    /**
     * @return Collection<int, AxiomEvidence>
     */
    public function getAxiomEvidence(): Collection {
        return $this->axiomEvidence;
    }

    public function addAxiomEvidence(AxiomEvidence $axiomEvidence): static {
        if (!$this->axiomEvidence->contains($axiomEvidence)) {
            $this->axiomEvidence->add($axiomEvidence);
            $axiomEvidence->setConformanceRun($this);
        }
        return $this;
    }

    public function removeAxiomEvidence(AxiomEvidence $axiomEvidence): static {
        if ($this->axiomEvidence->removeElement($axiomEvidence)) {
            if ($axiomEvidence->getConformanceRun() === $this) {
                $axiomEvidence->setConformanceRun(null);
            }
        }
        return $this;
    }
}
