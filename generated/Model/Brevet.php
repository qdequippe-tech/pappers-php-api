<?php

namespace Qdequippe\Pappers\Api\Model;

class Brevet extends \ArrayObject
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
     * Liste des propriétaires du brevet.
     *
     * @var list<PersonneBrevet>|null
     */
    protected $proprietaires;
    /**
     * Liste des dépositaires du brevet.
     *
     * @var list<PersonneBrevet>|null
     */
    protected $depositaires;
    /**
     * Liste des inventeurs du brevet.
     *
     * @var list<PersonneBrevet>|null
     */
    protected $inventeurs;
    /**
     * Liste des agents du brevet.
     *
     * @var list<PersonneBrevet>|null
     */
    protected $agents;
    /**
     * Titre de l'invention.
     *
     * @var string|null
     */
    protected $titreInvention;
    /**
     * Description de l'invention.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Statut actuel du brevet.
     *
     * @var string|null
     */
    protected $statut;
    /**
     * Informations sur la publication du brevet.
     *
     * @var BrevetPublication|null
     */
    protected $publication;
    /**
     * Code pays du brevet.
     *
     * @var string|null
     */
    protected $codePays;
    /**
     * Date de dépôt du brevet au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateDepot;
    /**
     * Numéro de dépôt du brevet.
     *
     * @var string|null
     */
    protected $numeroDepot;
    /**
     * Date d'expiration du brevet au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateExpiration;
    /**
     * Liste des priorités du brevet.
     *
     * @var list<BrevetPrioritesItem>|null
     */
    protected $priorites;
    /**
     * Liste des classifications du brevet.
     *
     * @var list<BrevetClassificationsItem>|null
     */
    protected $classifications;

    /**
     * Liste des propriétaires du brevet.
     *
     * @return list<PersonneBrevet>|null
     */
    public function getProprietaires(): ?array
    {
        return $this->proprietaires;
    }

    /**
     * Liste des propriétaires du brevet.
     *
     * @param list<PersonneBrevet>|null $proprietaires
     */
    public function setProprietaires(?array $proprietaires): self
    {
        $this->initialized['proprietaires'] = true;
        $this->proprietaires = $proprietaires;

        return $this;
    }

    /**
     * Liste des dépositaires du brevet.
     *
     * @return list<PersonneBrevet>|null
     */
    public function getDepositaires(): ?array
    {
        return $this->depositaires;
    }

    /**
     * Liste des dépositaires du brevet.
     *
     * @param list<PersonneBrevet>|null $depositaires
     */
    public function setDepositaires(?array $depositaires): self
    {
        $this->initialized['depositaires'] = true;
        $this->depositaires = $depositaires;

        return $this;
    }

    /**
     * Liste des inventeurs du brevet.
     *
     * @return list<PersonneBrevet>|null
     */
    public function getInventeurs(): ?array
    {
        return $this->inventeurs;
    }

    /**
     * Liste des inventeurs du brevet.
     *
     * @param list<PersonneBrevet>|null $inventeurs
     */
    public function setInventeurs(?array $inventeurs): self
    {
        $this->initialized['inventeurs'] = true;
        $this->inventeurs = $inventeurs;

        return $this;
    }

    /**
     * Liste des agents du brevet.
     *
     * @return list<PersonneBrevet>|null
     */
    public function getAgents(): ?array
    {
        return $this->agents;
    }

    /**
     * Liste des agents du brevet.
     *
     * @param list<PersonneBrevet>|null $agents
     */
    public function setAgents(?array $agents): self
    {
        $this->initialized['agents'] = true;
        $this->agents = $agents;

        return $this;
    }

    /**
     * Titre de l'invention.
     */
    public function getTitreInvention(): ?string
    {
        return $this->titreInvention;
    }

    /**
     * Titre de l'invention.
     */
    public function setTitreInvention(?string $titreInvention): self
    {
        $this->initialized['titreInvention'] = true;
        $this->titreInvention = $titreInvention;

        return $this;
    }

    /**
     * Description de l'invention.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Description de l'invention.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Statut actuel du brevet.
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * Statut actuel du brevet.
     */
    public function setStatut(?string $statut): self
    {
        $this->initialized['statut'] = true;
        $this->statut = $statut;

        return $this;
    }

    /**
     * Informations sur la publication du brevet.
     */
    public function getPublication(): ?BrevetPublication
    {
        return $this->publication;
    }

    /**
     * Informations sur la publication du brevet.
     */
    public function setPublication(?BrevetPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;

        return $this;
    }

    /**
     * Code pays du brevet.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code pays du brevet.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Date de dépôt du brevet au format AAAA-MM-JJ.
     */
    public function getDateDepot(): ?\DateTime
    {
        return $this->dateDepot;
    }

    /**
     * Date de dépôt du brevet au format AAAA-MM-JJ.
     */
    public function setDateDepot(?\DateTime $dateDepot): self
    {
        $this->initialized['dateDepot'] = true;
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Numéro de dépôt du brevet.
     */
    public function getNumeroDepot(): ?string
    {
        return $this->numeroDepot;
    }

    /**
     * Numéro de dépôt du brevet.
     */
    public function setNumeroDepot(?string $numeroDepot): self
    {
        $this->initialized['numeroDepot'] = true;
        $this->numeroDepot = $numeroDepot;

        return $this;
    }

    /**
     * Date d'expiration du brevet au format AAAA-MM-JJ.
     */
    public function getDateExpiration(): ?\DateTime
    {
        return $this->dateExpiration;
    }

    /**
     * Date d'expiration du brevet au format AAAA-MM-JJ.
     */
    public function setDateExpiration(?\DateTime $dateExpiration): self
    {
        $this->initialized['dateExpiration'] = true;
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Liste des priorités du brevet.
     *
     * @return list<BrevetPrioritesItem>|null
     */
    public function getPriorites(): ?array
    {
        return $this->priorites;
    }

    /**
     * Liste des priorités du brevet.
     *
     * @param list<BrevetPrioritesItem>|null $priorites
     */
    public function setPriorites(?array $priorites): self
    {
        $this->initialized['priorites'] = true;
        $this->priorites = $priorites;

        return $this;
    }

    /**
     * Liste des classifications du brevet.
     *
     * @return list<BrevetClassificationsItem>|null
     */
    public function getClassifications(): ?array
    {
        return $this->classifications;
    }

    /**
     * Liste des classifications du brevet.
     *
     * @param list<BrevetClassificationsItem>|null $classifications
     */
    public function setClassifications(?array $classifications): self
    {
        $this->initialized['classifications'] = true;
        $this->classifications = $classifications;

        return $this;
    }
}
