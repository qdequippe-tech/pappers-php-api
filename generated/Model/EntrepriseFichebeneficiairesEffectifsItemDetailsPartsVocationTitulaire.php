<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire extends \ArrayObject
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
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageDirectes;
    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageIndirectes;
    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes|null
     */
    protected $detailsDirectes;
    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes|null
     */
    protected $detailsIndirectes;

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe, en pourcentage des parts totales.
     */
    public function getPourcentageDirectes(): ?float
    {
        return $this->pourcentageDirectes;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe, en pourcentage des parts totales.
     */
    public function setPourcentageDirectes(?float $pourcentageDirectes): self
    {
        $this->initialized['pourcentageDirectes'] = true;
        $this->pourcentageDirectes = $pourcentageDirectes;

        return $this;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte, en pourcentage des parts totales.
     */
    public function getPourcentageIndirectes(): ?float
    {
        return $this->pourcentageIndirectes;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte, en pourcentage des parts totales.
     */
    public function setPourcentageIndirectes(?float $pourcentageIndirectes): self
    {
        $this->initialized['pourcentageIndirectes'] = true;
        $this->pourcentageIndirectes = $pourcentageIndirectes;

        return $this;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe.
     */
    public function getDetailsDirectes(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes
    {
        return $this->detailsDirectes;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe.
     */
    public function setDetailsDirectes(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes $detailsDirectes): self
    {
        $this->initialized['detailsDirectes'] = true;
        $this->detailsDirectes = $detailsDirectes;

        return $this;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte.
     */
    public function getDetailsIndirectes(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes
    {
        return $this->detailsIndirectes;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon indirecte.
     */
    public function setDetailsIndirectes(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsIndirectes $detailsIndirectes): self
    {
        $this->initialized['detailsIndirectes'] = true;
        $this->detailsIndirectes = $detailsIndirectes;

        return $this;
    }
}
