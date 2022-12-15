<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirectsDetailsEnIndivision extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en pleine propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float
     */
    protected $pourcentagePleinePropriete;
    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en nue propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float
     */
    protected $pourcentageNuePropriete;
    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en usufruit par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float
     */
    protected $pourcentageUsufruit;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en pleine propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentagePleinePropriete(): float
    {
        return $this->pourcentagePleinePropriete;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en pleine propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentagePleinePropriete(float $pourcentagePleinePropriete): self
    {
        $this->initialized['pourcentagePleinePropriete'] = true;
        $this->pourcentagePleinePropriete = $pourcentagePleinePropriete;

        return $this;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en nue propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageNuePropriete(): float
    {
        return $this->pourcentageNuePropriete;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en nue propriété par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageNuePropriete(float $pourcentageNuePropriete): self
    {
        $this->initialized['pourcentageNuePropriete'] = true;
        $this->pourcentageNuePropriete = $pourcentageNuePropriete;

        return $this;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en usufruit par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageUsufruit(): float
    {
        return $this->pourcentageUsufruit;
    }

    /**
     * Droits de vote détenus de façon indirecte par le biais d'une indivision en usufruit par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageUsufruit(float $pourcentageUsufruit): self
    {
        $this->initialized['pourcentageUsufruit'] = true;
        $this->pourcentageUsufruit = $pourcentageUsufruit;

        return $this;
    }
}
