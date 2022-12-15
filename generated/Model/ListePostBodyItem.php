<?php

namespace Qdequippe\Pappers\Api\Model;

class ListePostBodyItem extends \ArrayObject
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
     * SIREN de la personne morale (si ajout d'une personne morale).
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Dénomination de la personne morale (si ajout d'une personne morale).
     *
     * @var string|null
     */
    protected $denomination;
    /**
     * Nom de la personne physique (si ajout d'une personne physique).
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Prénom de la personne physique (si ajout d'une personne physique).
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Date de naissance de la personne physique au format AAAA-MM-JJ (si ajout d'une personne physique).
     *
     * @var string|null
     */
    protected $dateDeNaissance;
    /**
     * Active la recherche élargie du dirigeant : <ul><li>Pour une personne physique : c'est un cas rare mais la date de naissance du dirigeant n'est pas toujours connue de Pappers. Si vous activer ce filtre et que la date de naissance est inconnue, l'alerte sera générée uniquement sur la base du nom et prénom.</li><li>Pour une personne morale : c'est un cas rare mais le SIREN du dirigeant n'est pas toujours connu de Pappers. Si vous activer ce filtre et que le SIREN est inconnu, l'alerte sera générée uniquement sur la base de la dénomination. Activable uniquement si le champ denomination est présent.</li></ul>.
     *
     * @var bool|null
     */
    protected $rechercheElargie = false;

    /**
     * SIREN de la personne morale (si ajout d'une personne morale).
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de la personne morale (si ajout d'une personne morale).
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Dénomination de la personne morale (si ajout d'une personne morale).
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination de la personne morale (si ajout d'une personne morale).
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Nom de la personne physique (si ajout d'une personne physique).
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de la personne physique (si ajout d'une personne physique).
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Prénom de la personne physique (si ajout d'une personne physique).
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénom de la personne physique (si ajout d'une personne physique).
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Date de naissance de la personne physique au format AAAA-MM-JJ (si ajout d'une personne physique).
     */
    public function getDateDeNaissance(): ?string
    {
        return $this->dateDeNaissance;
    }

    /**
     * Date de naissance de la personne physique au format AAAA-MM-JJ (si ajout d'une personne physique).
     */
    public function setDateDeNaissance(?string $dateDeNaissance): self
    {
        $this->initialized['dateDeNaissance'] = true;
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Active la recherche élargie du dirigeant : <ul><li>Pour une personne physique : c'est un cas rare mais la date de naissance du dirigeant n'est pas toujours connue de Pappers. Si vous activer ce filtre et que la date de naissance est inconnue, l'alerte sera générée uniquement sur la base du nom et prénom.</li><li>Pour une personne morale : c'est un cas rare mais le SIREN du dirigeant n'est pas toujours connu de Pappers. Si vous activer ce filtre et que le SIREN est inconnu, l'alerte sera générée uniquement sur la base de la dénomination. Activable uniquement si le champ denomination est présent.</li></ul>.
     */
    public function getRechercheElargie(): ?bool
    {
        return $this->rechercheElargie;
    }

    /**
     * Active la recherche élargie du dirigeant : <ul><li>Pour une personne physique : c'est un cas rare mais la date de naissance du dirigeant n'est pas toujours connue de Pappers. Si vous activer ce filtre et que la date de naissance est inconnue, l'alerte sera générée uniquement sur la base du nom et prénom.</li><li>Pour une personne morale : c'est un cas rare mais le SIREN du dirigeant n'est pas toujours connu de Pappers. Si vous activer ce filtre et que le SIREN est inconnu, l'alerte sera générée uniquement sur la base de la dénomination. Activable uniquement si le champ denomination est présent.</li></ul>.
     */
    public function setRechercheElargie(?bool $rechercheElargie): self
    {
        $this->initialized['rechercheElargie'] = true;
        $this->rechercheElargie = $rechercheElargie;

        return $this;
    }
}
