<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseCiteePersonnesItem extends \ArrayObject
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
     * Nom de la personne.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Nom d'usage de la personne.
     *
     * @var string|null
     */
    protected $nomUsage;
    /**
     * Prénom de la personne.
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Date de naissance de la personne au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateDeNaissance;
    /**
     * Dénomination de l'entité.
     *
     * @var string|null
     */
    protected $denomination;
    /**
     * SIREN de l'entité.
     *
     * @var string|null
     */
    protected $siren;

    /**
     * Nom de la personne.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de la personne.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Nom d'usage de la personne.
     */
    public function getNomUsage(): ?string
    {
        return $this->nomUsage;
    }

    /**
     * Nom d'usage de la personne.
     */
    public function setNomUsage(?string $nomUsage): self
    {
        $this->initialized['nomUsage'] = true;
        $this->nomUsage = $nomUsage;

        return $this;
    }

    /**
     * Prénom de la personne.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénom de la personne.
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Date de naissance de la personne au format AAAA-MM-JJ.
     */
    public function getDateDeNaissance(): ?\DateTime
    {
        return $this->dateDeNaissance;
    }

    /**
     * Date de naissance de la personne au format AAAA-MM-JJ.
     */
    public function setDateDeNaissance(?\DateTime $dateDeNaissance): self
    {
        $this->initialized['dateDeNaissance'] = true;
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Dénomination de l'entité.
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination de l'entité.
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * SIREN de l'entité.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de l'entité.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }
}
