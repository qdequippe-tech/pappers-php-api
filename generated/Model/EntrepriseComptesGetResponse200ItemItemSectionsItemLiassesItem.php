<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Code de la liasse.
     *
     * @var string
     */
    protected $code;
    /**
     * Libellé de la liasse.
     *
     * @var string
     */
    protected $libelle;
    /**
     * Colonnes de la liasse.
     *
     * @var EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem[]
     */
    protected $colonnes;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Code de la liasse.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Code de la liasse.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Libellé de la liasse.
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Libellé de la liasse.
     */
    public function setLibelle(string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Colonnes de la liasse.
     *
     * @return EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem[]
     */
    public function getColonnes(): array
    {
        return $this->colonnes;
    }

    /**
     * Colonnes de la liasse.
     *
     * @param EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItemColonnesItem[] $colonnes
     */
    public function setColonnes(array $colonnes): self
    {
        $this->initialized['colonnes'] = true;
        $this->colonnes = $colonnes;

        return $this;
    }
}
