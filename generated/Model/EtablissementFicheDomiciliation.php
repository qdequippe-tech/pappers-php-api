<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class EtablissementFicheDomiciliation implements AdditionalPropertiesInterface
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
     * Nom de l'entreprise de domiciliation.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Siren de l'entreprise de domiciliation.
     *
     * @var string|null
     */
    protected $siren;

    /**
     * Nom de l'entreprise de domiciliation.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de l'entreprise de domiciliation.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Siren de l'entreprise de domiciliation.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * Siren de l'entreprise de domiciliation.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['nom' => ['nom', 'getNom', 'setNom'], 'siren' => ['siren', 'getSiren', 'setSiren']];
    }
}
