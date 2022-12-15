<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class BodaccDepotDesComptes extends Bodacc
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
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateCloture;
    /**
     * Type de dépôt de comptes.
     *
     * @var string|null
     */
    protected $typeDepot;
    /**
     * Descriptif du dépôt de comptes.
     *
     * @var string|null
     */
    protected $descriptif;

    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     */
    public function getDateCloture(): ?string
    {
        return $this->dateCloture;
    }

    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     */
    public function setDateCloture(?string $dateCloture): self
    {
        $this->initialized['dateCloture'] = true;
        $this->dateCloture = $dateCloture;

        return $this;
    }

    /**
     * Type de dépôt de comptes.
     */
    public function getTypeDepot(): ?string
    {
        return $this->typeDepot;
    }

    /**
     * Type de dépôt de comptes.
     */
    public function setTypeDepot(?string $typeDepot): self
    {
        $this->initialized['typeDepot'] = true;
        $this->typeDepot = $typeDepot;

        return $this;
    }

    /**
     * Descriptif du dépôt de comptes.
     */
    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    /**
     * Descriptif du dépôt de comptes.
     */
    public function setDescriptif(?string $descriptif): self
    {
        $this->initialized['descriptif'] = true;
        $this->descriptif = $descriptif;

        return $this;
    }
}
