<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class PersonneMarque extends \ArrayObject
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
     * Siren de l'entité, dans le cas d'une personne morale.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Entité légale.
     *
     * @var string|null
     */
    protected $entiteLegale;
    /**
     * Nom de l'entité.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Bâtiment de l'entité.
     *
     * @var string|null
     */
    protected $batiment;
    /**
     * Rue de l'entité.
     *
     * @var string|null
     */
    protected $rue;
    /**
     * Ville de l'entité.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Boîte postale de l'entité.
     *
     * @var string|null
     */
    protected $boitePostale;
    /**
     * Code postal de l'entité.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Code pays de l'entité.
     *
     * @var string|null
     */
    protected $codePays;

    /**
     * Siren de l'entité, dans le cas d'une personne morale.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * Siren de l'entité, dans le cas d'une personne morale.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Entité légale.
     */
    public function getEntiteLegale(): ?string
    {
        return $this->entiteLegale;
    }

    /**
     * Entité légale.
     */
    public function setEntiteLegale(?string $entiteLegale): self
    {
        $this->initialized['entiteLegale'] = true;
        $this->entiteLegale = $entiteLegale;

        return $this;
    }

    /**
     * Nom de l'entité.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de l'entité.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Bâtiment de l'entité.
     */
    public function getBatiment(): ?string
    {
        return $this->batiment;
    }

    /**
     * Bâtiment de l'entité.
     */
    public function setBatiment(?string $batiment): self
    {
        $this->initialized['batiment'] = true;
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Rue de l'entité.
     */
    public function getRue(): ?string
    {
        return $this->rue;
    }

    /**
     * Rue de l'entité.
     */
    public function setRue(?string $rue): self
    {
        $this->initialized['rue'] = true;
        $this->rue = $rue;

        return $this;
    }

    /**
     * Ville de l'entité.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville de l'entité.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Boîte postale de l'entité.
     */
    public function getBoitePostale(): ?string
    {
        return $this->boitePostale;
    }

    /**
     * Boîte postale de l'entité.
     */
    public function setBoitePostale(?string $boitePostale): self
    {
        $this->initialized['boitePostale'] = true;
        $this->boitePostale = $boitePostale;

        return $this;
    }

    /**
     * Code postal de l'entité.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal de l'entité.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Code pays de l'entité.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code pays de l'entité.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }
}
