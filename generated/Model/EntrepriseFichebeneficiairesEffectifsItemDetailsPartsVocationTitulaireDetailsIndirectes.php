<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision, en pourcentage des parts totales.
     *
     * @var float
     */
    protected $pourcentageEnIndivision;
    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale, en pourcentage des parts totales.
     *
     * @var float
     */
    protected $pourcentageEnPersonneMorale;
    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision
     */
    protected $detailsEnIndivision;
    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale
     */
    protected $detailsEnPersonneMorale;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision, en pourcentage des parts totales.
     */
    public function getPourcentageEnIndivision(): float
    {
        return $this->pourcentageEnIndivision;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision, en pourcentage des parts totales.
     */
    public function setPourcentageEnIndivision(float $pourcentageEnIndivision): self
    {
        $this->initialized['pourcentageEnIndivision'] = true;
        $this->pourcentageEnIndivision = $pourcentageEnIndivision;

        return $this;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale, en pourcentage des parts totales.
     */
    public function getPourcentageEnPersonneMorale(): float
    {
        return $this->pourcentageEnPersonneMorale;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale, en pourcentage des parts totales.
     */
    public function setPourcentageEnPersonneMorale(float $pourcentageEnPersonneMorale): self
    {
        $this->initialized['pourcentageEnPersonneMorale'] = true;
        $this->pourcentageEnPersonneMorale = $pourcentageEnPersonneMorale;

        return $this;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision.
     */
    public function getDetailsEnIndivision(): EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision
    {
        return $this->detailsEnIndivision;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une indivision.
     */
    public function setDetailsEnIndivision(EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnIndivision $detailsEnIndivision): self
    {
        $this->initialized['detailsEnIndivision'] = true;
        $this->detailsEnIndivision = $detailsEnIndivision;

        return $this;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     */
    public function getDetailsEnPersonneMorale(): EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale
    {
        return $this->detailsEnPersonneMorale;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte par le biais d'une personne morale.
     */
    public function setDetailsEnPersonneMorale(EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectesDetailsEnPersonneMorale $detailsEnPersonneMorale): self
    {
        $this->initialized['detailsEnPersonneMorale'] = true;
        $this->detailsEnPersonneMorale = $detailsEnPersonneMorale;

        return $this;
    }
}
