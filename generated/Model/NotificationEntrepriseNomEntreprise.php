<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntrepriseNomEntreprise extends \ArrayObject
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
     * @var string|null
     */
    protected $valeur;
    /**
     * @var string|null
     */
    protected $ancienneValeur;
    /**
     * Date de modification du nom de l'entreprise au format AAAA-MM-JJ.
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

    public function getAncienneValeur(): ?string
    {
        return $this->ancienneValeur;
    }

    public function setAncienneValeur(?string $ancienneValeur): self
    {
        $this->initialized['ancienneValeur'] = true;
        $this->ancienneValeur = $ancienneValeur;

        return $this;
    }

    /**
     * Date de modification du nom de l'entreprise au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de modification du nom de l'entreprise au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
