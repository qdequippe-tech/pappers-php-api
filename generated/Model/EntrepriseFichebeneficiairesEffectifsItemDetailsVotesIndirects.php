<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects extends \ArrayObject
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
     * Droits de vote détenus de façon indirecte par le biais d'une indivision par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageEnIndivision;
    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageEnPersonneMorale;
    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une indivision par le bénéficiaire effectif.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision|null
     */
    protected $detailsEnIndivision;
    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale|null
     */
    protected $detailsEnPersonneMorale;

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageEnIndivision(): ?float
    {
        return $this->pourcentageEnIndivision;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageEnIndivision(?float $pourcentageEnIndivision): self
    {
        $this->initialized['pourcentageEnIndivision'] = true;
        $this->pourcentageEnIndivision = $pourcentageEnIndivision;

        return $this;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageEnPersonneMorale(): ?float
    {
        return $this->pourcentageEnPersonneMorale;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageEnPersonneMorale(?float $pourcentageEnPersonneMorale): self
    {
        $this->initialized['pourcentageEnPersonneMorale'] = true;
        $this->pourcentageEnPersonneMorale = $pourcentageEnPersonneMorale;

        return $this;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une indivision par le bénéficiaire effectif.
     */
    public function getDetailsEnIndivision(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision
    {
        return $this->detailsEnIndivision;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une indivision par le bénéficiaire effectif.
     */
    public function setDetailsEnIndivision(?EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision $detailsEnIndivision): self
    {
        $this->initialized['detailsEnIndivision'] = true;
        $this->detailsEnIndivision = $detailsEnIndivision;

        return $this;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     */
    public function getDetailsEnPersonneMorale(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale
    {
        return $this->detailsEnPersonneMorale;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     */
    public function setDetailsEnPersonneMorale(?EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale $detailsEnPersonneMorale): self
    {
        $this->initialized['detailsEnPersonneMorale'] = true;
        $this->detailsEnPersonneMorale = $detailsEnPersonneMorale;

        return $this;
    }
}
