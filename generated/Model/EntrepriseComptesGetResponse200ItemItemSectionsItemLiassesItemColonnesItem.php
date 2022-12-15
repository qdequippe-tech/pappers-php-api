<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Libellé de la colonne.
     *
     * @var string
     */
    protected $libelle;
    /**
     * Valeur de la colonne.
     *
     * @var int
     */
    protected $valeur;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Libellé de la colonne.
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Libellé de la colonne.
     */
    public function setLibelle(string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Valeur de la colonne.
     */
    public function getValeur(): int
    {
        return $this->valeur;
    }

    /**
     * Valeur de la colonne.
     */
    public function setValeur(int $valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }
}
