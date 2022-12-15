<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale extends \ArrayObject
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
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en pleine propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentagePleinePropriete;
    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en nue propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageNuePropriete;
    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en usufruit par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageUsufruit;

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en pleine propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentagePleinePropriete(): ?float
    {
        return $this->pourcentagePleinePropriete;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en pleine propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentagePleinePropriete(?float $pourcentagePleinePropriete): self
    {
        $this->initialized['pourcentagePleinePropriete'] = true;
        $this->pourcentagePleinePropriete = $pourcentagePleinePropriete;

        return $this;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en nue propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageNuePropriete(): ?float
    {
        return $this->pourcentageNuePropriete;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en nue propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageNuePropriete(?float $pourcentageNuePropriete): self
    {
        $this->initialized['pourcentageNuePropriete'] = true;
        $this->pourcentageNuePropriete = $pourcentageNuePropriete;

        return $this;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en usufruit par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageUsufruit(): ?float
    {
        return $this->pourcentageUsufruit;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale en usufruit par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageUsufruit(?float $pourcentageUsufruit): self
    {
        $this->initialized['pourcentageUsufruit'] = true;
        $this->pourcentageUsufruit = $pourcentageUsufruit;

        return $this;
    }
}
