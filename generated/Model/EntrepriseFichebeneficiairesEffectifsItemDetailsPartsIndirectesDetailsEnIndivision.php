<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectesDetailsEnIndivision extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Parts détenues de façon indirecte par le biais d'une indivision en pleine propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float
     */
    protected $pourcentagePleinePropriete;
    /**
     * Parts détenues de façon indirecte par le biais d'une indivision en nue propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float
     */
    protected $pourcentageNuePropriete;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Parts détenues de façon indirecte par le biais d'une indivision en pleine propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentagePleinePropriete(): float
    {
        return $this->pourcentagePleinePropriete;
    }

    /**
     * Parts détenues de façon indirecte par le biais d'une indivision en pleine propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentagePleinePropriete(float $pourcentagePleinePropriete): self
    {
        $this->initialized['pourcentagePleinePropriete'] = true;
        $this->pourcentagePleinePropriete = $pourcentagePleinePropriete;

        return $this;
    }

    /**
     * Parts détenues de façon indirecte par le biais d'une indivision en nue propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentageNuePropriete(): float
    {
        return $this->pourcentageNuePropriete;
    }

    /**
     * Parts détenues de façon indirecte par le biais d'une indivision en nue propriété par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentageNuePropriete(float $pourcentageNuePropriete): self
    {
        $this->initialized['pourcentageNuePropriete'] = true;
        $this->pourcentageNuePropriete = $pourcentageNuePropriete;

        return $this;
    }
}
