<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class EntrepriseComptesGetResponse200ItemItemSectionsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * @var list<EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem>|null
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
     * @return list<EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem>|null
     */
    public function getLiasses(): ?array
    {
        return $this->liasses;
    }

    /**
     * Liste des liasses fiscales de la section.
     *
     * @param list<EntrepriseComptesGetResponse200ItemItemSectionsItemLiassesItem>|null $liasses
     */
    public function setLiasses(?array $liasses): self
    {
        $this->initialized['liasses'] = true;
        $this->liasses = $liasses;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['libelle' => ['libelle', 'getLibelle', 'setLibelle'], 'liasses' => ['liasses', 'getLiasses', 'setLiasses']];
    }
}
