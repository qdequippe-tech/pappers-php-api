<?php

namespace Qdequippe\Pappers\Api\Model;

class PersonnePolitiquementExposeeFonctionsItem extends \ArrayObject
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
     * Nom de la fonction.
     *
     * @var string|null
     */
    protected $fonction;
    /**
     * Pays associé à la fonction.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Code pays associé à la fonction.
     *
     * @var string|null
     */
    protected $codePays;
    /**
     * Vaut vrai si la fonction est en cours.
     *
     * @var bool|null
     */
    protected $enCours;
    /**
     * Date de début de la fonction.
     *
     * @var string|null
     */
    protected $dateDebut;
    /**
     * Date de fin de la fonction.
     *
     * @var string|null
     */
    protected $dateFin;
    /**
     * Liste des sources.
     *
     * @var PersonnePolitiquementExposeeFonctionsItemSourcesItem[]|null
     */
    protected $sources;

    /**
     * Nom de la fonction.
     */
    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    /**
     * Nom de la fonction.
     */
    public function setFonction(?string $fonction): self
    {
        $this->initialized['fonction'] = true;
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Pays associé à la fonction.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays associé à la fonction.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code pays associé à la fonction.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code pays associé à la fonction.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Vaut vrai si la fonction est en cours.
     */
    public function getEnCours(): ?bool
    {
        return $this->enCours;
    }

    /**
     * Vaut vrai si la fonction est en cours.
     */
    public function setEnCours(?bool $enCours): self
    {
        $this->initialized['enCours'] = true;
        $this->enCours = $enCours;

        return $this;
    }

    /**
     * Date de début de la fonction.
     */
    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    /**
     * Date de début de la fonction.
     */
    public function setDateDebut(?string $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Date de fin de la fonction.
     */
    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    /**
     * Date de fin de la fonction.
     */
    public function setDateFin(?string $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Liste des sources.
     *
     * @return PersonnePolitiquementExposeeFonctionsItemSourcesItem[]|null
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }

    /**
     * Liste des sources.
     *
     * @param PersonnePolitiquementExposeeFonctionsItemSourcesItem[]|null $sources
     */
    public function setSources(?array $sources): self
    {
        $this->initialized['sources'] = true;
        $this->sources = $sources;

        return $this;
    }
}
