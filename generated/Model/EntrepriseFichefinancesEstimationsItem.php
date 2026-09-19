<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class EntrepriseFicheFinancesEstimationsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Année de cloture d'exercice.
     *
     * @var int|null
     */
    protected $annee;
    /**
     * Chiffre d'affaires estimé de l'entreprise.
     *
     * @var int|null
     */
    protected $chiffreAffaires;

    /**
     * Année de cloture d'exercice.
     */
    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    /**
     * Année de cloture d'exercice.
     */
    public function setAnnee(?int $annee): self
    {
        $this->initialized['annee'] = true;
        $this->annee = $annee;

        return $this;
    }

    /**
     * Chiffre d'affaires estimé de l'entreprise.
     */
    public function getChiffreAffaires(): ?int
    {
        return $this->chiffreAffaires;
    }

    /**
     * Chiffre d'affaires estimé de l'entreprise.
     */
    public function setChiffreAffaires(?int $chiffreAffaires): self
    {
        $this->initialized['chiffreAffaires'] = true;
        $this->chiffreAffaires = $chiffreAffaires;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['annee' => ['annee', 'getAnnee', 'setAnnee'], 'chiffreAffaires' => ['chiffre_affaires', 'getChiffreAffaires', 'setChiffreAffaires']];
    }
}
