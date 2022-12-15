<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes extends \ArrayObject
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
     * Parts détenues de façon directe en pleine propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentagePleinePropriete;
    /**
     * Parts détenues de façon directe en nue propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageNuePropriete;

    /**
     * Parts détenues de façon directe en pleine propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentagePleinePropriete(): ?float
    {
        return $this->pourcentagePleinePropriete;
    }

    /**
     * Parts détenues de façon directe en pleine propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentagePleinePropriete(?float $pourcentagePleinePropriete): self
    {
        $this->initialized['pourcentagePleinePropriete'] = true;
        $this->pourcentagePleinePropriete = $pourcentagePleinePropriete;

        return $this;
    }

    /**
     * Parts détenues de façon directe en nue propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentageNuePropriete(): ?float
    {
        return $this->pourcentageNuePropriete;
    }

    /**
     * Parts détenues de façon directe en nue propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentageNuePropriete(?float $pourcentageNuePropriete): self
    {
        $this->initialized['pourcentageNuePropriete'] = true;
        $this->pourcentageNuePropriete = $pourcentageNuePropriete;

        return $this;
    }
}
