<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes implements AdditionalPropertiesInterface
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
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageEnIndivision;
    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageEnPersonneMorale;
    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision.
     *
     * @var EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision|null
     */
    protected $detailsEnIndivision;
    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     *
     * @var EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale|null
     */
    protected $detailsEnPersonneMorale;

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision, en pourcentage des parts totales.
     */
    public function getPourcentageEnIndivision(): ?float
    {
        return $this->pourcentageEnIndivision;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision, en pourcentage des parts totales.
     */
    public function setPourcentageEnIndivision(?float $pourcentageEnIndivision): self
    {
        $this->initialized['pourcentageEnIndivision'] = true;
        $this->pourcentageEnIndivision = $pourcentageEnIndivision;

        return $this;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale, en pourcentage des parts totales.
     */
    public function getPourcentageEnPersonneMorale(): ?float
    {
        return $this->pourcentageEnPersonneMorale;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale, en pourcentage des parts totales.
     */
    public function setPourcentageEnPersonneMorale(?float $pourcentageEnPersonneMorale): self
    {
        $this->initialized['pourcentageEnPersonneMorale'] = true;
        $this->pourcentageEnPersonneMorale = $pourcentageEnPersonneMorale;

        return $this;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision.
     */
    public function getDetailsEnIndivision(): ?EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision
    {
        return $this->detailsEnIndivision;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision.
     */
    public function setDetailsEnIndivision(?EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision $detailsEnIndivision): self
    {
        $this->initialized['detailsEnIndivision'] = true;
        $this->detailsEnIndivision = $detailsEnIndivision;

        return $this;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     */
    public function getDetailsEnPersonneMorale(): ?EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale
    {
        return $this->detailsEnPersonneMorale;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     */
    public function setDetailsEnPersonneMorale(?EntrepriseFicheBeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale $detailsEnPersonneMorale): self
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
