<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class NotificationVeilleNomCommercialItem implements AdditionalPropertiesInterface
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
     * SIRET de l’entreprise.
     *
     * @var string|null
     */
    protected $siret;
    /**
     * @var string|null
     */
    protected $valeur;
    /**
     * Date de modification du nom commercial au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;

    /**
     * SIRET de l’entreprise.
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * SIRET de l’entreprise.
     */
    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

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
     * Date de modification du nom commercial au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de modification du nom commercial au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['siret' => ['siret', 'getSiret', 'setSiret'], 'valeur' => ['valeur', 'getValeur', 'setValeur'], 'date' => ['date', 'getDate', 'setDate']];
    }
}
