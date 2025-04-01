<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntrepriseNouveauxComptesDisponiblesItem extends \ArrayObject
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
     * Année de clôture des comptes.
     *
     * @var string|null
     */
    protected $anneeCloture;
    /**
     * Date de publication des comptes au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Type de comptes (Consolidés ou Sociaux).
     *
     * @var string|null
     */
    protected $typeComptes;

    /**
     * Année de clôture des comptes.
     */
    public function getAnneeCloture(): ?string
    {
        return $this->anneeCloture;
    }

    /**
     * Année de clôture des comptes.
     */
    public function setAnneeCloture(?string $anneeCloture): self
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
     * Type de comptes (Consolidés ou Sociaux).
     */
    public function getTypeComptes(): ?string
    {
        return $this->typeComptes;
    }

    /**
     * Type de comptes (Consolidés ou Sociaux).
     */
    public function setTypeComptes(?string $typeComptes): self
    {
        $this->initialized['typeComptes'] = true;
        $this->typeComptes = $typeComptes;

        return $this;
    }
}
