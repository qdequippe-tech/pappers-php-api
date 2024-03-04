<?php

namespace Qdequippe\Pappers\Api\Model;

class PersonnePolitiquementExposee extends \ArrayObject
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
     * Vaut vrai si la personne est actuellement politiquement exposée.
     *
     * @var bool|null
     */
    protected $enCours;
    /**
     * Liste des fonctions actuelles et passées de la personne politiquement exposée.
     *
     * @var PersonnePolitiquementExposeeFonctionsItem[]|null
     */
    protected $fonctions;

    /**
     * Vaut vrai si la personne est actuellement politiquement exposée.
     */
    public function getEnCours(): ?bool
    {
        return $this->enCours;
    }

    /**
     * Vaut vrai si la personne est actuellement politiquement exposée.
     */
    public function setEnCours(?bool $enCours): self
    {
        $this->initialized['enCours'] = true;
        $this->enCours = $enCours;

        return $this;
    }

    /**
     * Liste des fonctions actuelles et passées de la personne politiquement exposée.
     *
     * @return PersonnePolitiquementExposeeFonctionsItem[]|null
     */
    public function getFonctions(): ?array
    {
        return $this->fonctions;
    }

    /**
     * Liste des fonctions actuelles et passées de la personne politiquement exposée.
     *
     * @param PersonnePolitiquementExposeeFonctionsItem[]|null $fonctions
     */
    public function setFonctions(?array $fonctions): self
    {
        $this->initialized['fonctions'] = true;
        $this->fonctions = $fonctions;

        return $this;
    }
}
