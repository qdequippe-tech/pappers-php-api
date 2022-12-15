<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseComptesGetResponse200ItemItemSectionsItem extends \ArrayObject
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
     * Libellé de la section.
     *
     * @var string|null
     */
    protected $libelle;
    /**
     * Liste des liasses fiscales de la section.
     *
     * @var EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem[]|null
     */
    protected $liasses;

    /**
     * Libellé de la section.
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * Libellé de la section.
     */
    public function setLibelle(?string $libelle): self
    {
        $this->initialized['libelle'] = true;
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Liste des liasses fiscales de la section.
     *
     * @return EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem[]|null
     */
    public function getLiasses(): ?array
    {
        return $this->liasses;
    }

    /**
     * Liste des liasses fiscales de la section.
     *
     * @param EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem[]|null $liasses
     */
    public function setLiasses(?array $liasses): self
    {
        $this->initialized['liasses'] = true;
        $this->liasses = $liasses;

        return $this;
    }
}
