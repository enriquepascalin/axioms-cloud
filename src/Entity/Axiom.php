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

use App\Enum\NormativeLevel;
use App\Repository\AxiomRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: AxiomRepository::class)]
#[ORM\Table(name: 'axiom')]
#[ORM\UniqueConstraint(name: 'uniq_axiom_code', columns: ['code'])]
#[ORM\Index(name: 'idx_axiom_normative_level', columns: ['normative_level'])]
#[UniqueEntity(fields: ['code'], message: 'Axiom code must be unique.')]
#[Broadcast]
class Axiom
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    #[Assert\NotBlank(message: 'Code is required.')]
    #[Assert\Length(max: 8, maxMessage: 'Code must be at most {{ limit }} characters.')]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Title is required.')]
    #[Assert\Length(max: 255, maxMessage: 'Title must be at most {{ limit }} characters.')]
    private ?string $title = null;

    /**
     * enum-backed column (Doctrine maps to string via enumType)
     * 
     * @see NormativeLevel
     */
    #[ORM\Column(enumType: NormativeLevel::class)]
    #[Assert\NotNull(message: 'Normative level is required.')]
    private ?NormativeLevel $normativeLevel = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $summary = null;

    /**
     * Evidence rows linked to this axiom.
     *
     * @var Collection<int, AxiomEvidence>
     */
    #[ORM\OneToMany(
        targetEntity: AxiomEvidence::class,
        mappedBy: 'axiom',
        orphanRemoval: true,
        cascade: ['persist']
    )]
    private Collection $evidence;

    #[ORM\Column]
    private ?bool $isFeatured = null;

    public function __construct()
    {
        $this->evidence = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->code ? "{$this->code} — {$this->title}" : (string) $this->title;
    }

    public function getId(): ?int {
        return $this->id; 
    }

    public function getCode(): ?string {
        return $this->code;
    }

    public function setCode(string $code): static {
        $this->code = $code; return $this;
    }

    public function getTitle(): ?string {
        return $this->title; 
    }
    
    public function setTitle(string $title): static {
        $this->title = $title; return $this; 
    }

    public function getSummary(): ?string {
        return $this->summary; 
    }
    
    public function setSummary(?string $summary): static {
        $this->summary = $summary; return $this; 
    }

    /** @return Collection<int, AxiomEvidence> */
    public function getEvidence(): Collection {
        return $this->evidence;
    }

    public function addEvidence(AxiomEvidence $evidence): static {
        if (!$this->evidence->contains($evidence)) {
            $this->evidence->add($evidence);
            $evidence->setAxiom($this);
        }
        return $this;
    }

    public function removeEvidence(AxiomEvidence $evidence): static {
        $this->evidence->removeElement($evidence);

        return $this;
    }

    public function getNormativeLevel(): ?NormativeLevel {
        return $this->normativeLevel;
    }

    public function setNormativeLevel(NormativeLevel $normativeLevel): static {
        $this->normativeLevel = $normativeLevel; return $this;
    }

    public function isFeatured(): ?bool
    {
        return $this->isFeatured;
    }

    public function setIsFeatured(bool $isFeatured): static
    {
        $this->isFeatured = $isFeatured;

        return $this;
    }
}
