<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseComptesGetResponse200ItemItemSectionsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Libellé de la section.
     *
     * @var string
     */
    protected $libelle;
    /**
     * Liste des liasses fiscales de la section.
     *
     * @var EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem[]
     */
    protected $liasses;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Libellé de la section.
     */
    public function getLibelle(): string
    {
        return $this->libelle;
    }

    /**
     * Libellé de la section.
     */
    public function setLibelle(string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Liste des liasses fiscales de la section.
     *
     * @return EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem[]
     */
    public function getLiasses(): array
    {
        return $this->liasses;
    }

    /**
     * Liste des liasses fiscales de la section.
     *
     * @param EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem[] $liasses
     */
    public function setLiasses(array $liasses): self
    {
        $this->initialized['liasses'] = true;
        $this->liasses = $liasses;

        return $this;
    }
}
