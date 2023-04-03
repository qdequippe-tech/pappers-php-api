<?php

namespace Qdequippe\Pappers\Api\Model;

class CartographieEntreprisesItem extends \ArrayObject
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
     * Un identifiant unique du noeud.
     *
     * @var string|null
     */
    protected $id;
    /**
     * SIREN de l'entreprise.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Nom de l'entreprise.
     *
     * @var string|null
     */
    protected $nomEntreprise;

    /**
     * Un identifiant unique du noeud.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Un identifiant unique du noeud.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * SIREN de l'entreprise.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de l'entreprise.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Nom de l'entreprise.
     */
    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    /**
     * Nom de l'entreprise.
     */
    public function setNomEntreprise(?string $nomEntreprise): self
    {
        $this->initialized['nomEntreprise'] = true;
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }
}
