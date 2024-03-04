<?php

namespace Qdequippe\Pappers\Api\Model;

class Sanction extends \ArrayObject
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
     * Description de la sanction.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Autorité ayant prononcé la sanction.
     *
     * @var string|null
     */
    protected $autorite;
    /**
     * Pays de la sanction.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Code du pays de la sanction.
     *
     * @var string|null
     */
    protected $codePays;
    /**
     * Vaut vrai si la sanction est en cours.
     *
     * @var bool|null
     */
    protected $enCours;
    /**
     * Date de début de la sanction.
     *
     * @var string|null
     */
    protected $dateDebut;
    /**
     * Date de fin de la sanction.
     *
     * @var string|null
     */
    protected $dateFin;
    /**
     * Liste des sources.
     *
     * @var SanctionSourcesItem[]|null
     */
    protected $sources;

    /**
     * Description de la sanction.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Description de la sanction.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Autorité ayant prononcé la sanction.
     */
    public function getAutorite(): ?string
    {
        return $this->autorite;
    }

    /**
     * Autorité ayant prononcé la sanction.
     */
    public function setAutorite(?string $autorite): self
    {
        $this->initialized['autorite'] = true;
        $this->autorite = $autorite;

        return $this;
    }

    /**
     * Pays de la sanction.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays de la sanction.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code du pays de la sanction.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code du pays de la sanction.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Vaut vrai si la sanction est en cours.
     */
    public function getEnCours(): ?bool
    {
        return $this->enCours;
    }

    /**
     * Vaut vrai si la sanction est en cours.
     */
    public function setEnCours(?bool $enCours): self
    {
        $this->initialized['enCours'] = true;
        $this->enCours = $enCours;

        return $this;
    }

    /**
     * Date de début de la sanction.
     */
    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    /**
     * Date de début de la sanction.
     */
    public function setDateDebut(?string $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Date de fin de la sanction.
     */
    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    /**
     * Date de fin de la sanction.
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
     * @return SanctionSourcesItem[]|null
     */
    public function getSources(): ?array
    {
        return $this->sources;
    }

    /**
     * Liste des sources.
     *
     * @param SanctionSourcesItem[]|null $sources
     */
    public function setSources(?array $sources): self
    {
        $this->initialized['sources'] = true;
        $this->sources = $sources;

        return $this;
    }
}
