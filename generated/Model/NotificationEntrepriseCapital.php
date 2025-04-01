<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntrepriseCapital extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * @var float|null
     */
    protected $valeur;
    /**
     * @var float|null
     */
    protected $ancienneValeur;
    /**
     * Date de modification du capital au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;

    public function getValeur(): ?float
    {
        return $this->valeur;
    }

    public function setValeur(?float $valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }

    public function getAncienneValeur(): ?float
    {
        return $this->ancienneValeur;
    }

    public function setAncienneValeur(?float $ancienneValeur): self
    {
        $this->initialized['ancienneValeur'] = true;
        $this->ancienneValeur = $ancienneValeur;

        return $this;
    }

    /**
     * Date de modification du capital au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de modification du capital au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
