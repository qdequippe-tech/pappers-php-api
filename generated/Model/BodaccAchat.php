<?php

namespace Qdequippe\Pappers\Api\Model;

class BodaccAchat extends Bodacc
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
     * @var string|null
     */
    protected $nomEntreprise;
    /**
     * Vrai si l'entreprise concernée par la publication est une personne morale, faux si c'est une personne physique.
     *
     * @var bool|null
     */
    protected $personneMorale;
    /**
     * Dénomination de l'entreprise concernée par la publication (uniquement en cas de personne morale).
     *
     * @var string|null
     */
    protected $denomination;
    /**
     * Nom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Prénom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Administration (dans le cas d'une personne morale).
     *
     * @var string|null
     */
    protected $administration;
    /**
     * Adresse de l'entreprise concernée par la publication.
     *
     * @var string|null
     */
    protected $adresse;
    /**
     * Commentaires sur la publication.
     *
     * @var string|null
     */
    protected $commentaires;
    /**
     * Détails sur les oppositions.
     *
     * @var string|null
     */
    protected $oppositions;
    /**
     * Détails sur la déclaration de créance.
     *
     * @var string|null
     */
    protected $declarationCreance;
    /**
     * Journal où a été publiée la publication légale.
     *
     * @var string|null
     */
    protected $publicationLegale;
    /**
     * Dénomination de l'ancien propriétaire de l'établisement.
     *
     * @var string|null
     */
    protected $denominationAncienProprietaire;
    /**
     * Siren de l'ancien propriétaire de l'établisement.
     *
     * @var string|null
     */
    protected $sirenAncienProprietaire;
    /**
     * Dénomination de l'ancien exploitant de l'établisement.
     *
     * @var string|null
     */
    protected $denominationAncienExploitant;
    /**
     * Siren de l'ancien exploitant de l'établisement.
     *
     * @var string|null
     */
    protected $sirenAncienExploitant;

    /**
     * Nom de l'entreprise concernée par la publication. Correspond à la dénomination en cas de personne morale et à nom + prenom en cas de personne physique.
     */
    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    /**
     * Nom de l'entreprise concernée par la publication. Correspond à la dénomination en cas de personne morale et à nom + prenom en cas de personne physique.
     */
    public function setNomEntreprise(?string $nomEntreprise): self
    {
        $this->initialized['nomEntreprise'] = true;
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Vrai si l'entreprise concernée par la publication est une personne morale, faux si c'est une personne physique.
     */
    public function getPersonneMorale(): ?bool
    {
        return $this->personneMorale;
    }

    /**
     * Vrai si l'entreprise concernée par la publication est une personne morale, faux si c'est une personne physique.
     */
    public function setPersonneMorale(?bool $personneMorale): self
    {
        $this->initialized['personneMorale'] = true;
        $this->personneMorale = $personneMorale;

        return $this;
    }

    /**
     * Dénomination de l'entreprise concernée par la publication (uniquement en cas de personne morale).
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination de l'entreprise concernée par la publication (uniquement en cas de personne morale).
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Nom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Prénom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénom de la personne physique concernée par la publication (uniquement en cas de personne physique).
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Administration (dans le cas d'une personne morale).
     */
    public function getAdministration(): ?string
    {
        return $this->administration;
    }

    /**
     * Administration (dans le cas d'une personne morale).
     */
    public function setAdministration(?string $administration): self
    {
        $this->initialized['administration'] = true;
        $this->administration = $administration;

        return $this;
    }

    /**
     * Adresse de l'entreprise concernée par la publication.
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * Adresse de l'entreprise concernée par la publication.
     */
    public function setAdresse(?string $adresse): self
    {
        $this->initialized['adresse'] = true;
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Commentaires sur la publication.
     */
    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    /**
     * Commentaires sur la publication.
     */
    public function setCommentaires(?string $commentaires): self
    {
        $this->initialized['commentaires'] = true;
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Détails sur les oppositions.
     */
    public function getOppositions(): ?string
    {
        return $this->oppositions;
    }

    /**
     * Détails sur les oppositions.
     */
    public function setOppositions(?string $oppositions): self
    {
        $this->initialized['oppositions'] = true;
        $this->oppositions = $oppositions;

        return $this;
    }

    /**
     * Détails sur la déclaration de créance.
     */
    public function getDeclarationCreance(): ?string
    {
        return $this->declarationCreance;
    }

    /**
     * Détails sur la déclaration de créance.
     */
    public function setDeclarationCreance(?string $declarationCreance): self
    {
        $this->initialized['declarationCreance'] = true;
        $this->declarationCreance = $declarationCreance;

        return $this;
    }

    /**
     * Journal où a été publiée la publication légale.
     */
    public function getPublicationLegale(): ?string
    {
        return $this->publicationLegale;
    }

    /**
     * Journal où a été publiée la publication légale.
     */
    public function setPublicationLegale(?string $publicationLegale): self
    {
        $this->initialized['publicationLegale'] = true;
        $this->publicationLegale = $publicationLegale;

        return $this;
    }

    /**
     * Dénomination de l'ancien propriétaire de l'établisement.
     */
    public function getDenominationAncienProprietaire(): ?string
    {
        return $this->denominationAncienProprietaire;
    }

    /**
     * Dénomination de l'ancien propriétaire de l'établisement.
     */
    public function setDenominationAncienProprietaire(?string $denominationAncienProprietaire): self
    {
        $this->initialized['denominationAncienProprietaire'] = true;
        $this->denominationAncienProprietaire = $denominationAncienProprietaire;

        return $this;
    }

    /**
     * Siren de l'ancien propriétaire de l'établisement.
     */
    public function getSirenAncienProprietaire(): ?string
    {
        return $this->sirenAncienProprietaire;
    }

    /**
     * Siren de l'ancien propriétaire de l'établisement.
     */
    public function setSirenAncienProprietaire(?string $sirenAncienProprietaire): self
    {
        $this->initialized['sirenAncienProprietaire'] = true;
        $this->sirenAncienProprietaire = $sirenAncienProprietaire;

        return $this;
    }

    /**
     * Dénomination de l'ancien exploitant de l'établisement.
     */
    public function getDenominationAncienExploitant(): ?string
    {
        return $this->denominationAncienExploitant;
    }

    /**
     * Dénomination de l'ancien exploitant de l'établisement.
     */
    public function setDenominationAncienExploitant(?string $denominationAncienExploitant): self
    {
        $this->initialized['denominationAncienExploitant'] = true;
        $this->denominationAncienExploitant = $denominationAncienExploitant;

        return $this;
    }

    /**
     * Siren de l'ancien exploitant de l'établisement.
     */
    public function getSirenAncienExploitant(): ?string
    {
        return $this->sirenAncienExploitant;
    }

    /**
     * Siren de l'ancien exploitant de l'établisement.
     */
    public function setSirenAncienExploitant(?string $sirenAncienExploitant): self
    {
        $this->initialized['sirenAncienExploitant'] = true;
        $this->sirenAncienExploitant = $sirenAncienExploitant;

        return $this;
    }
}
