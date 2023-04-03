<?php

namespace Qdequippe\Pappers\Api\Model;

class CartographiePersonnesItem extends \ArrayObject
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
    protected $prenom;
    /**
     * Nom de l'entreprise.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Niveau du noeud. Le niveau 1 correspond aux dirigeants et bénéficiaires effectifs directement liés à l'entreprise recherchée. Le niveau 2 correspond aux autres.
     *
     * @var int|null
     */
    protected $niveau;

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
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * SIREN de l'entreprise.
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Nom de l'entreprise.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de l'entreprise.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Niveau du noeud. Le niveau 1 correspond aux dirigeants et bénéficiaires effectifs directement liés à l'entreprise recherchée. Le niveau 2 correspond aux autres.
     */
    public function getNiveau(): ?int
    {
        return $this->niveau;
    }

    /**
     * Niveau du noeud. Le niveau 1 correspond aux dirigeants et bénéficiaires effectifs directement liés à l'entreprise recherchée. Le niveau 2 correspond aux autres.
     */
    public function setNiveau(?int $niveau): self
    {
        $this->initialized['niveau'] = true;
        $this->niveau = $niveau;

        return $this;
    }
}
