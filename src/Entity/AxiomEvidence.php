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

use App\Enum\AxiomEvidenceStatus;
use App\Repository\AxiomEvidenceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: AxiomEvidenceRepository::class)]
#[ORM\Table(name: 'axiom_evidence')]
#[ORM\UniqueConstraint(name: 'uniq_ev_spec_axiom', columns: ['spec_version_id', 'axiom_id'])]
#[ORM\Index(name: 'idx_ev_status', columns: ['status'])]
#[ORM\Index(name: 'idx_ev_spec_version', columns: ['spec_version_id'])]
#[ORM\Index(name: 'idx_ev_axiom', columns: ['axiom_id'])]
#[ORM\Index(name: 'idx_ev_conformance_run', columns: ['conformance_run_id'])]
#[UniqueEntity(fields: ['specVersion', 'axiom'], message: 'Evidence already exists for this version & axiom.')]
#[Broadcast]
class AxiomEvidence
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * Enum-backed (stored as string), non-nullable by default in DB.
     *
     * @see AxiomEvidenceStatus
     */
    #[ORM\Column(enumType: AxiomEvidenceStatus::class)]
    #[Assert\NotNull(message: 'Status is required.')]
    private ?AxiomEvidenceStatus $status = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $note = null;

    /**
     * Longer URL field for reports or external evidence.
     */
    #[ORM\Column(length: 1024, nullable: true)]
    #[Assert\Url(message: 'Provide a valid URL.')]
    #[Assert\Length(max: 1024, maxMessage: 'URL must be at most {{ limit }} characters.')]
    private ?string $url = null;

    /**
     * Short-ish free text id for test references.
     */
    #[ORM\Column(length: 120, nullable: true)]
    #[Assert\Length(max: 120, maxMessage: 'Reference must be at most {{ limit }} characters.')]
    private ?string $ctkTestRef = null;

    /**
     * Owning side → cascade delete when a spec version is removed.
     */
    #[ORM\ManyToOne(inversedBy: 'evidence')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Specification version is required.')]
    private ?SpecVersion $specVersion = null;

    /**
     * Owning side → cascade delete when an axiom is removed.
     */
    #[ORM\ManyToOne(inversedBy: 'evidence')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Axiom is required.')]
    private ?Axiom $axiom = null;

    /**
     * Optional link to the run that produced/verified this evidence.
     */
    #[ORM\ManyToOne(inversedBy: 'axiomEvidence')]
    #[ORM\JoinColumn(nullable: true, onDelete: 'SET NULL')]
    private ?ConformanceRun $conformanceRun = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function getNote(): ?string {
        return $this->note;
    }

    public function setNote(?string $note): static {
        $this->note = $note; return $this;
    }

    public function getUrl(): ?string {
        return $this->url;
    }

    public function setUrl(?string $url): static {
        $this->url = $url; return $this;
    }

    public function getCtkTestRef(): ?string {
        return $this->ctkTestRef;
    }

    public function setCtkTestRef(?string $ctkTestRef): static {
        $this->ctkTestRef = $ctkTestRef; return $this;
    }

    public function getSpecVersion(): ?SpecVersion {
        return $this->specVersion;
    }

    public function setSpecVersion(?SpecVersion $specVersion): static {
        $this->specVersion = $specVersion; return $this;
    }

    public function getAxiom(): ?Axiom {
        return $this->axiom;
    }

    public function setAxiom(?Axiom $axiom): static {
        $this->axiom = $axiom; return $this;
    }

    public function getConformanceRun(): ?ConformanceRun {
        return $this->conformanceRun;
    }

    public function setConformanceRun(?ConformanceRun $conformanceRun): static {
        $this->conformanceRun = $conformanceRun; return $this;
    }

    public function getStatus(): ?AxiomEvidenceStatus {
        return $this->status;
    }

    public function setStatus(AxiomEvidenceStatus $status): static {
        $this->status = $status; return $this;
    }
}
