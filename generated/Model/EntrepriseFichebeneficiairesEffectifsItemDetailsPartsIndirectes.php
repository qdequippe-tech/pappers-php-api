<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectes implements AdditionalPropertiesInterface
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
     * Parts détenues de façon indirecte par le biais d'une indivision par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageEnIndivision;
    /**
     * Parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageEnPersonneMorale;
    /**
     * Détails des parts détenues de façon indirecte par le biais d'une indivision par le bénéficiaire effectif.
     *
     * @var EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision|null
     */
    protected $detailsEnIndivision;
    /**
     * Détails des parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     *
     * @var EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale|null
     */
    protected $detailsEnPersonneMorale;

    /**
     * Parts détenues de façon indirecte par le biais d'une indivision par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentageEnIndivision(): ?float
    {
        return $this->pourcentageEnIndivision;
    }

    /**
     * Parts détenues de façon indirecte par le biais d'une indivision par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentageEnIndivision(?float $pourcentageEnIndivision): self
    {
        $this->initialized['pourcentageEnIndivision'] = true;
        $this->pourcentageEnIndivision = $pourcentageEnIndivision;

        return $this;
    }

    /**
     * Parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentageEnPersonneMorale(): ?float
    {
        return $this->pourcentageEnPersonneMorale;
    }

    /**
     * Parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentageEnPersonneMorale(?float $pourcentageEnPersonneMorale): self
    {
        $this->initialized['pourcentageEnPersonneMorale'] = true;
        $this->pourcentageEnPersonneMorale = $pourcentageEnPersonneMorale;

        return $this;
    }

    /**
     * Détails des parts détenues de façon indirecte par le biais d'une indivision par le bénéficiaire effectif.
     */
    public function getDetailsEnIndivision(): ?EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision
    {
        return $this->detailsEnIndivision;
    }

    /**
     * Détails des parts détenues de façon indirecte par le biais d'une indivision par le bénéficiaire effectif.
     */
    public function setDetailsEnIndivision(?EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision $detailsEnIndivision): self
    {
        $this->initialized['detailsEnIndivision'] = true;
        $this->detailsEnIndivision = $detailsEnIndivision;

        return $this;
    }

    /**
     * Détails des parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     */
    public function getDetailsEnPersonneMorale(): ?EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale
    {
        return $this->detailsEnPersonneMorale;
    }

    /**
     * Détails des parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     */
    public function setDetailsEnPersonneMorale(?EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale $detailsEnPersonneMorale): self
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
