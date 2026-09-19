<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class EntrepriseFicheActifNetInferieurMoitieCapital implements AdditionalPropertiesInterface
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
     * Vrai si l'actif net est actuellement inférieur à la moitié du capital social.
     *
     * @var bool|null
     */
    protected $enCours;
    /**
     * Date de début de la situation où l'actif net est inférieur à la moitié du capital social.
     *
     * @var string|null
     */
    protected $dateDebut;
    /**
     * Date de fin de la situation où l'actif net était inférieur à la moitié du capital social.
     *
     * @var string|null
     */
    protected $dateFin;

    /**
     * Vrai si l'actif net est actuellement inférieur à la moitié du capital social.
     */
    public function getEnCours(): ?bool
    {
        return $this->enCours;
    }

    /**
     * Vrai si l'actif net est actuellement inférieur à la moitié du capital social.
     */
    public function setEnCours(?bool $enCours): self
    {
        $this->initialized['enCours'] = true;
        $this->enCours = $enCours;

        return $this;
    }

    /**
     * Date de début de la situation où l'actif net est inférieur à la moitié du capital social.
     */
    public function getDateDebut(): ?string
    {
        return $this->dateDebut;
    }

    /**
     * Date de début de la situation où l'actif net est inférieur à la moitié du capital social.
     */
    public function setDateDebut(?string $dateDebut): self
    {
        $this->initialized['dateDebut'] = true;
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Date de fin de la situation où l'actif net était inférieur à la moitié du capital social.
     */
    public function getDateFin(): ?string
    {
        return $this->dateFin;
    }

    /**
     * Date de fin de la situation où l'actif net était inférieur à la moitié du capital social.
     */
    public function setDateFin(?string $dateFin): self
    {
        $this->initialized['dateFin'] = true;
        $this->dateFin = $dateFin;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['enCours' => ['en_cours', 'getEnCours', 'setEnCours'], 'dateDebut' => ['date_debut', 'getDateDebut', 'setDateDebut'], 'dateFin' => ['date_fin', 'getDateFin', 'setDateFin']];
    }
}
