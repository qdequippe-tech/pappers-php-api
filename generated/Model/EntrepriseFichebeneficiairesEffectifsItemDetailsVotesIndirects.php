<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class EntrepriseFicheBeneficiairesEffectifsItemDetailsVotesIndirects implements AdditionalPropertiesInterface
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
     * @var EntrepriseFicheBeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision|null
     */
    protected $detailsEnIndivision;
    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     *
     * @var EntrepriseFicheBeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale|null
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
    public function getDetailsEnIndivision(): ?EntrepriseFicheBeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision
    {
        return $this->detailsEnIndivision;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une indivision par le bénéficiaire effectif.
     */
    public function setDetailsEnIndivision(?EntrepriseFicheBeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision $detailsEnIndivision): self
    {
        $this->initialized['detailsEnIndivision'] = true;
        $this->detailsEnIndivision = $detailsEnIndivision;

        return $this;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     */
    public function getDetailsEnPersonneMorale(): ?EntrepriseFicheBeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale
    {
        return $this->detailsEnPersonneMorale;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     */
    public function setDetailsEnPersonneMorale(?EntrepriseFicheBeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnPersonneMorale $detailsEnPersonneMorale): self
    {
        $this->initialized['detailsEnPersonneMorale'] = true;
        $this->detailsEnPersonneMorale = $detailsEnPersonneMorale;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['pourcentageEnIndivision' => ['pourcentage_en_indivision', 'getPourcentageEnIndivision', 'setPourcentageEnIndivision'], 'pourcentageEnPersonneMorale' => ['pourcentage_en_personne_morale', 'getPourcentageEnPersonneMorale', 'setPourcentageEnPersonneMorale'], 'detailsEnIndivision' => ['details_en_indivision', 'getDetailsEnIndivision', 'setDetailsEnIndivision'], 'detailsEnPersonneMorale' => ['details_en_personne_morale', 'getDetailsEnPersonneMorale', 'setDetailsEnPersonneMorale']];
    }
}
