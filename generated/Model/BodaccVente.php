<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class BodaccVente extends Bodacc
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
     * Nom de l'entreprise concernée par la publication. Correspond à la dénomination en cas de personne morale et à nom + prenom en cas de personne physique.
     *
     * @var string
     */
    protected $nomEntreprise;
    /**
     * Vrai si l'entreprise concernée par la publication est une personne morale, faux si c'est une personne physique.
     *
     * @var bool
     */
    protected $personneMorale;
    /**
     * Dénomination de l'entreprise concernée par la publication (uniquement en cas de personne morale).
     *
     * @var string
     */
    protected $denomination;
    /**
     * Nom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     *
     * @var string
     */
    protected $nom;
    /**
     * Prénom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     *
     * @var string
     */
    protected $prenom;
    /**
     * Administration (dans le cas d'une personne morale).
     *
     * @var string
     */
    protected $administration;
    /**
     * Adresse de l'entreprise concernée par la publication.
     *
     * @var string
     */
    protected $adresse;
    /**
     * Commentaires sur la publication.
     *
     * @var string
     */
    protected $commentaires;
    /**
     * Détails sur les oppositions.
     *
     * @var string
     */
    protected $oppositions;
    /**
     * Détails sur la déclaration de créance.
     *
     * @var string
     */
    protected $declarationCreance;
    /**
     * Journal où a été publiée la publication légale.
     *
     * @var string
     */
    protected $publicationLegale;
    /**
     * Dénomination du nouveau propriétaire de l'établisement.
     *
     * @var string
     */
    protected $denominationNouveauProprietaire;
    /**
     * Siren du nouveau propriétaire de l'établisement.
     *
     * @var string
     */
    protected $sirenNouveauProprietaire;
    /**
     * Dénomination du nouvel exploitant de l'établisement.
     *
     * @var string
     */
    protected $denominationNouvelExploitant;
    /**
     * Siren du nouvel exploitant de l'établisement.
     *
     * @var string
     */
    protected $sirenNouvelExploitant;

    /**
     * Nom de l'entreprise concernée par la publication. Correspond à la dénomination en cas de personne morale et à nom + prenom en cas de personne physique.
     */
    public function getNomEntreprise(): string
    {
        return $this->nomEntreprise;
    }

    /**
     * Nom de l'entreprise concernée par la publication. Correspond à la dénomination en cas de personne morale et à nom + prenom en cas de personne physique.
     */
    public function setNomEntreprise(string $nomEntreprise): self
    {
        $this->initialized['nomEntreprise'] = true;
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Vrai si l'entreprise concernée par la publication est une personne morale, faux si c'est une personne physique.
     */
    public function getPersonneMorale(): bool
    {
        return $this->personneMorale;
    }

    /**
     * Vrai si l'entreprise concernée par la publication est une personne morale, faux si c'est une personne physique.
     */
    public function setPersonneMorale(bool $personneMorale): self
    {
        $this->initialized['personneMorale'] = true;
        $this->personneMorale = $personneMorale;

        return $this;
    }

    /**
     * Dénomination de l'entreprise concernée par la publication (uniquement en cas de personne morale).
     */
    public function getDenomination(): string
    {
        return $this->denomination;
    }

    /**
     * Dénomination de l'entreprise concernée par la publication (uniquement en cas de personne morale).
     */
    public function setDenomination(string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Nom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Nom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     */
    public function setNom(string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Prénom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Prénom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     */
    public function setPrenom(string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Administration (dans le cas d'une personne morale).
     */
    public function getAdministration(): string
    {
        return $this->administration;
    }

    /**
     * Administration (dans le cas d'une personne morale).
     */
    public function setAdministration(string $administration): self
    {
        $this->initialized['administration'] = true;
        $this->administration = $administration;

        return $this;
    }

    /**
     * Adresse de l'entreprise concernée par la publication.
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Adresse de l'entreprise concernée par la publication.
     */
    public function setAdresse(string $adresse): self
    {
        $this->initialized['adresse'] = true;
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Commentaires sur la publication.
     */
    public function getCommentaires(): string
    {
        return $this->commentaires;
    }

    /**
     * Commentaires sur la publication.
     */
    public function setCommentaires(string $commentaires): self
    {
        $this->initialized['commentaires'] = true;
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Détails sur les oppositions.
     */
    public function getOppositions(): string
    {
        return $this->oppositions;
    }

    /**
     * Détails sur les oppositions.
     */
    public function setOppositions(string $oppositions): self
    {
        $this->initialized['oppositions'] = true;
        $this->oppositions = $oppositions;

        return $this;
    }

    /**
     * Détails sur la déclaration de créance.
     */
    public function getDeclarationCreance(): string
    {
        return $this->declarationCreance;
    }

    /**
     * Détails sur la déclaration de créance.
     */
    public function setDeclarationCreance(string $declarationCreance): self
    {
        $this->initialized['declarationCreance'] = true;
        $this->declarationCreance = $declarationCreance;

        return $this;
    }

    /**
     * Journal où a été publiée la publication légale.
     */
    public function getPublicationLegale(): string
    {
        return $this->publicationLegale;
    }

    /**
     * Journal où a été publiée la publication légale.
     */
    public function setPublicationLegale(string $publicationLegale): self
    {
        $this->initialized['publicationLegale'] = true;
        $this->publicationLegale = $publicationLegale;

        return $this;
    }

    /**
     * Dénomination du nouveau propriétaire de l'établisement.
     */
    public function getDenominationNouveauProprietaire(): string
    {
        return $this->denominationNouveauProprietaire;
    }

    /**
     * Dénomination du nouveau propriétaire de l'établisement.
     */
    public function setDenominationNouveauProprietaire(string $denominationNouveauProprietaire): self
    {
        $this->initialized['denominationNouveauProprietaire'] = true;
        $this->denominationNouveauProprietaire = $denominationNouveauProprietaire;

        return $this;
    }

    /**
     * Siren du nouveau propriétaire de l'établisement.
     */
    public function getSirenNouveauProprietaire(): string
    {
        return $this->sirenNouveauProprietaire;
    }

    /**
     * Siren du nouveau propriétaire de l'établisement.
     */
    public function setSirenNouveauProprietaire(string $sirenNouveauProprietaire): self
    {
        $this->initialized['sirenNouveauProprietaire'] = true;
        $this->sirenNouveauProprietaire = $sirenNouveauProprietaire;

        return $this;
    }

    /**
     * Dénomination du nouvel exploitant de l'établisement.
     */
    public function getDenominationNouvelExploitant(): string
    {
        return $this->denominationNouvelExploitant;
    }

    /**
     * Dénomination du nouvel exploitant de l'établisement.
     */
    public function setDenominationNouvelExploitant(string $denominationNouvelExploitant): self
    {
        $this->initialized['denominationNouvelExploitant'] = true;
        $this->denominationNouvelExploitant = $denominationNouvelExploitant;

        return $this;
    }

    /**
     * Siren du nouvel exploitant de l'établisement.
     */
    public function getSirenNouvelExploitant(): string
    {
        return $this->sirenNouvelExploitant;
    }

    /**
     * Siren du nouvel exploitant de l'établisement.
     */
    public function setSirenNouvelExploitant(string $sirenNouvelExploitant): self
    {
        $this->initialized['sirenNouvelExploitant'] = true;
        $this->sirenNouvelExploitant = $sirenNouvelExploitant;

        return $this;
    }
}
