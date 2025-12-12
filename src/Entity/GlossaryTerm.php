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

use App\Repository\GlossaryTermRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\UX\Turbo\Attribute\Broadcast;

#[ORM\Entity(repositoryClass: GlossaryTermRepository::class)]
#[ORM\Table(name: 'glossary_term')]
#[ORM\UniqueConstraint(name: 'uniq_glossary_slug', columns: ['slug'])]
#[ORM\Index(name: 'idx_glossary_term', fields: ['term'])]
#[ORM\Index(name: 'idx_glossary_slug', fields: ['slug'])]
#[UniqueEntity(fields: ['slug'], message: 'Slug must be unique.')]
#[Broadcast]
class GlossaryTerm
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Term is required.')]
    #[Assert\Length(max: 255, maxMessage: 'Term must be at most {{ limit }} characters.')]
    private ?string $term = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Slug is required.')]
    #[Assert\Length(max: 255, maxMessage: 'Slug must be at most {{ limit }} characters.')]
    #[Assert\Regex(
        pattern: '/^[a-z0-9]+(?:-[a-z0-9]+)*$/',
        message: 'Slug can contain lowercase letters, numbers, and hyphens; no spaces or uppercase.'
    )]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $definition = null;

    /**
     * Owning side of a self-referencing many-to-many using an explicit join table.
     *
     * @var Collection<int, self>
     */
    #[ORM\ManyToMany(targetEntity: self::class, inversedBy: 'glossaryTerms')]
    #[ORM\JoinTable(name: 'glossary_term_glossary_term')]
    #[ORM\JoinColumn(name: 'glossary_term_source', referencedColumnName: 'id', onDelete: 'CASCADE')]
    #[ORM\InverseJoinColumn(name: 'glossary_term_target', referencedColumnName: 'id', onDelete: 'CASCADE')]
    #[Assert\Unique(message: 'Related terms must be unique.')]
    private Collection $related;

    /**
     * Inverse side; kept in sync by add/remove helpers.
     *
     * @var Collection<int, self>
     */
    #[ORM\ManyToMany(targetEntity: self::class, mappedBy: 'related')]
    private Collection $glossaryTerms;

    public function __construct()
    {
        $this->related = new ArrayCollection();
        $this->glossaryTerms = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->term ?? $this->slug ?? '';
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getTerm(): ?string {
        return $this->term;
    }

    public function setTerm(string $term): static {
        $this->term = $term; return $this;
    }

    public function getSlug(): ?string {
        return $this->slug;
    }

    public function setSlug(string $slug): static {
        $this->slug = $slug; return $this;
    }

    public function getDefinition(): ?string {
        return $this->definition;
    }

    public function setDefinition(?string $definition): static {
        $this->definition = $definition; return $this;
    }

    /** @return Collection<int, self> */
    public function getRelated(): Collection {
        return $this->related;
    }

    public function addRelated(self $related): static {
        if ($related === $this) {
            return $this;
        }
        if (!$this->related->contains($related)) {
            $this->related->add($related);
            if (!$related->glossaryTerms->contains($this)) {
                $related->glossaryTerms->add($this);
            }
        }
        return $this;
    }

    public function removeRelated(self $related): static {
        if ($this->related->removeElement($related)) {
            $related->glossaryTerms->removeElement($this);
        }
        return $this;
    }

    /** @return Collection<int, self> */
    public function getGlossaryTerms(): Collection {
        return $this->glossaryTerms;
    }

    public function addGlossaryTerm(self $glossaryTerm): static {
        if (!$this->glossaryTerms->contains($glossaryTerm)) {
            $this->glossaryTerms->add($glossaryTerm);
            $glossaryTerm->addRelated($this);
        }
        return $this;
    }

    public function removeGlossaryTerm(self $glossaryTerm): static {
        if ($this->glossaryTerms->removeElement($glossaryTerm)) {
            $glossaryTerm->removeRelated($this);
        }
        return $this;
    }
}
