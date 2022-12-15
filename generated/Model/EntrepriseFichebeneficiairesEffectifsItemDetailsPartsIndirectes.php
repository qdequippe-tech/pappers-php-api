<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes extends \ArrayObject
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
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision|null
     */
    protected $detailsEnIndivision;
    /**
     * Détails des parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale|null
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
    public function getDetailsEnIndivision(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision
    {
        return $this->detailsEnIndivision;
    }

    /**
     * Détails des parts détenues de façon indirecte par le biais d'une indivision par le bénéficiaire effectif.
     */
    public function setDetailsEnIndivision(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision $detailsEnIndivision): self
    {
        $this->initialized['detailsEnIndivision'] = true;
        $this->detailsEnIndivision = $detailsEnIndivision;

        return $this;
    }

    /**
     * Détails des parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     */
    public function getDetailsEnPersonneMorale(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale
    {
        return $this->detailsEnPersonneMorale;
    }

    /**
     * Détails des parts détenues de façon indirecte par le biais d'une personne morale par le bénéficiaire effectif.
     */
    public function setDetailsEnPersonneMorale(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnPersonneMorale $detailsEnPersonneMorale): self
    {
        $this->initialized['detailsEnPersonneMorale'] = true;
        $this->detailsEnPersonneMorale = $detailsEnPersonneMorale;

        return $this;
    }
}
