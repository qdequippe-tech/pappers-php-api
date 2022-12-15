<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion extends \ArrayObject
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
     * Nom de la société de gestion.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * SIREN de la société de gestion.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Greffe de la société de gestion.
     *
     * @var string|null
     */
    protected $greffe;
    /**
     * Adresse de la société de gestion.
     *
     * @var string|null
     */
    protected $adresse;
    /**
     * Code postal de la société de gestion.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Ville de la société de gestion.
     *
     * @var string|null
     */
    protected $ville;

    /**
     * Nom de la société de gestion.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de la société de gestion.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * SIREN de la société de gestion.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de la société de gestion.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Greffe de la société de gestion.
     */
    public function getGreffe(): ?string
    {
        return $this->greffe;
    }

    /**
     * Greffe de la société de gestion.
     */
    public function setGreffe(?string $greffe): self
    {
        $this->initialized['greffe'] = true;
        $this->greffe = $greffe;

        return $this;
    }

    /**
     * Adresse de la société de gestion.
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * Adresse de la société de gestion.
     */
    public function setAdresse(?string $adresse): self
    {
        $this->initialized['adresse'] = true;
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Code postal de la société de gestion.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal de la société de gestion.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Ville de la société de gestion.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville de la société de gestion.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }
}
