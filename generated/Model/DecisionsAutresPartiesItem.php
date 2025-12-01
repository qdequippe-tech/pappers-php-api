<?php

namespace Qdequippe\Pappers\Api\Model;

class DecisionsAutresPartiesItem extends \ArrayObject
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
     * Nom de l'autre partie.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * SIREN de l'autre partie (si personne morale).
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Position de l'autre partie dans l'affaire.
     *
     * @var string|null
     */
    protected $position;
    /**
     * Liste des avocats représentant l'autre partie dans l'affaire.
     *
     * @var list<string>|null
     */
    protected $avocats;

    /**
     * Nom de l'autre partie.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de l'autre partie.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * SIREN de l'autre partie (si personne morale).
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de l'autre partie (si personne morale).
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Position de l'autre partie dans l'affaire.
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * Position de l'autre partie dans l'affaire.
     */
    public function setPosition(?string $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    /**
     * Liste des avocats représentant l'autre partie dans l'affaire.
     *
     * @return list<string>|null
     */
    public function getAvocats(): ?array
    {
        return $this->avocats;
    }

    /**
     * Liste des avocats représentant l'autre partie dans l'affaire.
     *
     * @param list<string>|null $avocats
     */
    public function setAvocats(?array $avocats): self
    {
        $this->initialized['avocats'] = true;
        $this->avocats = $avocats;

        return $this;
    }
}
