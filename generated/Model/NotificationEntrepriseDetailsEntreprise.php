<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class NotificationEntrepriseDetailsEntreprise implements AdditionalPropertiesInterface
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
     * Nom de l'entreprise.
     *
     * @var string|null
     */
    protected $nomEntreprise;

    /**
     * Nom de l'entreprise.
     */
    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    /**
     * Nom de l'entreprise.
     */
    public function setNomEntreprise(?string $nomEntreprise): self
    {
        $this->initialized['nomEntreprise'] = true;
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['nomEntreprise' => ['nom_entreprise', 'getNomEntreprise', 'setNomEntreprise']];
    }
}
