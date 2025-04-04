<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationDirigeant extends \ArrayObject
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
     * Dirigeant surveillé.
     *
     * @var string|null
     */
    protected $dirigeant;
    /**
     * Note optionnelle relative au dirigeant surveillé.
     *
     * @var string|null
     */
    protected $information;
    /**
     * Détails du dirigeant.
     *
     * @var NotificationDirigeantDetailsDirigeant|null
     */
    protected $detailsDirigeant;
    /**
     * Nouvelles sanctions pour le dirigeant.
     *
     * @var list<NotificationDirigeantNouvellesSanctionsItem>|null
     */
    protected $nouvellesSanctions;
    /**
     * Nouveaux mandats politiques pour le dirigeant.
     *
     * @var list<NotificationDirigeantNouveauxMandatsPolitiquesItem>|null
     */
    protected $nouveauxMandatsPolitiques;
    /**
     * Entreprises liées au dirigeant.
     *
     * @var list<NotificationDirigeantEntreprisesItem>|null
     */
    protected $entreprises;

    /**
     * Dirigeant surveillé.
     */
    public function getDirigeant(): ?string
    {
        return $this->dirigeant;
    }

    /**
     * Dirigeant surveillé.
     */
    public function setDirigeant(?string $dirigeant): self
    {
        $this->initialized['dirigeant'] = true;
        $this->dirigeant = $dirigeant;

        return $this;
    }

    /**
     * Note optionnelle relative au dirigeant surveillé.
     */
    public function getInformation(): ?string
    {
        return $this->information;
    }

    /**
     * Note optionnelle relative au dirigeant surveillé.
     */
    public function setInformation(?string $information): self
    {
        $this->initialized['information'] = true;
        $this->information = $information;

        return $this;
    }

    /**
     * Détails du dirigeant.
     */
    public function getDetailsDirigeant(): ?NotificationDirigeantDetailsDirigeant
    {
        return $this->detailsDirigeant;
    }

    /**
     * Détails du dirigeant.
     */
    public function setDetailsDirigeant(?NotificationDirigeantDetailsDirigeant $detailsDirigeant): self
    {
        $this->initialized['detailsDirigeant'] = true;
        $this->detailsDirigeant = $detailsDirigeant;

        return $this;
    }

    /**
     * Nouvelles sanctions pour le dirigeant.
     *
     * @return list<NotificationDirigeantNouvellesSanctionsItem>|null
     */
    public function getNouvellesSanctions(): ?array
    {
        return $this->nouvellesSanctions;
    }

    /**
     * Nouvelles sanctions pour le dirigeant.
     *
     * @param list<NotificationDirigeantNouvellesSanctionsItem>|null $nouvellesSanctions
     */
    public function setNouvellesSanctions(?array $nouvellesSanctions): self
    {
        $this->initialized['nouvellesSanctions'] = true;
        $this->nouvellesSanctions = $nouvellesSanctions;

        return $this;
    }

    /**
     * Nouveaux mandats politiques pour le dirigeant.
     *
     * @return list<NotificationDirigeantNouveauxMandatsPolitiquesItem>|null
     */
    public function getNouveauxMandatsPolitiques(): ?array
    {
        return $this->nouveauxMandatsPolitiques;
    }

    /**
     * Nouveaux mandats politiques pour le dirigeant.
     *
     * @param list<NotificationDirigeantNouveauxMandatsPolitiquesItem>|null $nouveauxMandatsPolitiques
     */
    public function setNouveauxMandatsPolitiques(?array $nouveauxMandatsPolitiques): self
    {
        $this->initialized['nouveauxMandatsPolitiques'] = true;
        $this->nouveauxMandatsPolitiques = $nouveauxMandatsPolitiques;

        return $this;
    }

    /**
     * Entreprises liées au dirigeant.
     *
     * @return list<NotificationDirigeantEntreprisesItem>|null
     */
    public function getEntreprises(): ?array
    {
        return $this->entreprises;
    }

    /**
     * Entreprises liées au dirigeant.
     *
     * @param list<NotificationDirigeantEntreprisesItem>|null $entreprises
     */
    public function setEntreprises(?array $entreprises): self
    {
        $this->initialized['entreprises'] = true;
        $this->entreprises = $entreprises;

        return $this;
    }
}
