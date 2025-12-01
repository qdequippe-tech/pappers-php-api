<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntrepriseResultatItem extends \ArrayObject
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
     * Année de clôture des comptes.
     *
     * @var float|null
     */
    protected $anneeCloture;
    /**
     * Date de publication des comptes au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Token.
     *
     * @var string|null
     */
    protected $token;
    /**
     * Type de comptes.
     *
     * @var string|null
     */
    protected $typeComptes;

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

    /**
     * Année de clôture des comptes.
     */
    public function getAnneeCloture(): ?float
    {
        return $this->anneeCloture;
    }

    /**
     * Année de clôture des comptes.
     */
    public function setAnneeCloture(?float $anneeCloture): self
    {
        $this->initialized['anneeCloture'] = true;
        $this->anneeCloture = $anneeCloture;

        return $this;
    }

    /**
     * Date de publication des comptes au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de publication des comptes au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Token.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Token.
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    /**
     * Type de comptes.
     */
    public function getTypeComptes(): ?string
    {
        return $this->typeComptes;
    }

    /**
     * Type de comptes.
     */
    public function setTypeComptes(?string $typeComptes): self
    {
        $this->initialized['typeComptes'] = true;
        $this->typeComptes = $typeComptes;

        return $this;
    }
}
