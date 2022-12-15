<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes extends \ArrayObject
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
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision|null
     */
    protected $detailsEnIndivision;
    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale|null
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
    public function getDetailsEnIndivision(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision
    {
        return $this->detailsEnIndivision;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision.
     */
    public function setDetailsEnIndivision(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision $detailsEnIndivision): self
    {
        $this->initialized['detailsEnIndivision'] = true;
        $this->detailsEnIndivision = $detailsEnIndivision;

        return $this;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     */
    public function getDetailsEnPersonneMorale(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale
    {
        return $this->detailsEnPersonneMorale;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     */
    public function setDetailsEnPersonneMorale(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale $detailsEnPersonneMorale): self
    {
        $this->initialized['detailsEnPersonneMorale'] = true;
        $this->detailsEnPersonneMorale = $detailsEnPersonneMorale;

        return $this;
    }
}
