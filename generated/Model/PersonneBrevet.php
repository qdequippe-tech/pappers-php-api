<?php

namespace Qdequippe\Pappers\Api\Model;

class PersonneBrevet extends \ArrayObject
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
     * SIREN de l'entreprise.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Nom de la personne.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Rue.
     *
     * @var string|null
     */
    protected $rue;
    /**
     * Ville.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Code postal.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Code pays.
     *
     * @var string|null
     */
    protected $codePays;

    /**
     * SIREN de l'entreprise.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de l'entreprise.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

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
     * Rue.
     */
    public function getRue(): ?string
    {
        return $this->rue;
    }

    /**
     * Rue.
     */
    public function setRue(?string $rue): self
    {
        $this->initialized['rue'] = true;
        $this->rue = $rue;

        return $this;
    }

    /**
     * Ville.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Code postal.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Code pays.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code pays.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }
}
