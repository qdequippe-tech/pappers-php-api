<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class BodaccImmatriculation extends Bodacc
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
}
