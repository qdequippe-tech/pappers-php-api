<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class NotificationVeilleStatutRcs implements AdditionalPropertiesInterface
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
     * @var string|null
     */
    protected $valeur;
    /**
     * Date de modification du statut au RCS au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(?string $valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Date de modification du statut au RCS au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de modification du statut au RCS au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['valeur' => ['valeur', 'getValeur', 'setValeur'], 'date' => ['date', 'getDate', 'setDate']];
    }
}
