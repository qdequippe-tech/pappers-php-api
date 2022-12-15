<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaireDetailsDirectes extends \ArrayObject
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
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe en pleine propriété, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentagePleinePropriete;
    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe en nue propriété, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageNuePropriete;

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe en pleine propriété, en pourcentage des parts totales.
     */
    public function getPourcentagePleinePropriete(): ?float
    {
        return $this->pourcentagePleinePropriete;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe en pleine propriété, en pourcentage des parts totales.
     */
    public function setPourcentagePleinePropriete(?float $pourcentagePleinePropriete): self
    {
        $this->initialized['pourcentagePleinePropriete'] = true;
        $this->pourcentagePleinePropriete = $pourcentagePleinePropriete;

        return $this;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe en nue propriété, en pourcentage des parts totales.
     */
    public function getPourcentageNuePropriete(): ?float
    {
        return $this->pourcentageNuePropriete;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire de façon directe en nue propriété, en pourcentage des parts totales.
     */
    public function setPourcentageNuePropriete(?float $pourcentageNuePropriete): self
    {
        $this->initialized['pourcentageNuePropriete'] = true;
        $this->pourcentageNuePropriete = $pourcentageNuePropriete;

        return $this;
    }
}
