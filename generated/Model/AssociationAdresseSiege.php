<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class AssociationAdresseSiege extends \ArrayObject
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
     * Code postal du siège social.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Code insee du siège social.
     *
     * @var string|null
     */
    protected $codeInsee;
    /**
     * Ville du siège social.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Numéro de voie du siège social.
     *
     * @var string|null
     */
    protected $numeroVoie;
    /**
     * Indice de répétition du siège social.
     *
     * @var string|null
     */
    protected $indiceRepetition;
    /**
     * Type de voie du siège social.
     *
     * @var string|null
     */
    protected $typeVoie;
    /**
     * Libellé de la voie du siège social.
     *
     * @var string|null
     */
    protected $libelleVoie;
    /**
     * Complément de l'adresse du siège social.
     *
     * @var string|null
     */
    protected $complementAdresse;
    /**
     * Complément de distribution du siege social.
     *
     * @var string|null
     */
    protected $distribution;
    /**
     * Adresse complète du siège social.
     *
     * @var string|null
     */
    protected $adresseLigne1;
    /**
     * Renseignement supplémentaire à l'adresse du siège social.
     *
     * @var string|null
     */
    protected $adresseLigne2;

    /**
     * Code postal du siège social.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal du siège social.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Code insee du siège social.
     */
    public function getCodeInsee(): ?string
    {
        return $this->codeInsee;
    }

    /**
     * Code insee du siège social.
     */
    public function setCodeInsee(?string $codeInsee): self
    {
        $this->initialized['codeInsee'] = true;
        $this->codeInsee = $codeInsee;

        return $this;
    }

    /**
     * Ville du siège social.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville du siège social.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Numéro de voie du siège social.
     */
    public function getNumeroVoie(): ?string
    {
        return $this->numeroVoie;
    }

    /**
     * Numéro de voie du siège social.
     */
    public function setNumeroVoie(?string $numeroVoie): self
    {
        $this->initialized['numeroVoie'] = true;
        $this->numeroVoie = $numeroVoie;

        return $this;
    }

    /**
     * Indice de répétition du siège social.
     */
    public function getIndiceRepetition(): ?string
    {
        return $this->indiceRepetition;
    }

    /**
     * Indice de répétition du siège social.
     */
    public function setIndiceRepetition(?string $indiceRepetition): self
    {
        $this->initialized['indiceRepetition'] = true;
        $this->indiceRepetition = $indiceRepetition;

        return $this;
    }

    /**
     * Type de voie du siège social.
     */
    public function getTypeVoie(): ?string
    {
        return $this->typeVoie;
    }

    /**
     * Type de voie du siège social.
     */
    public function setTypeVoie(?string $typeVoie): self
    {
        $this->initialized['typeVoie'] = true;
        $this->typeVoie = $typeVoie;

        return $this;
    }

    /**
     * Libellé de la voie du siège social.
     */
    public function getLibelleVoie(): ?string
    {
        return $this->libelleVoie;
    }

    /**
     * Libellé de la voie du siège social.
     */
    public function setLibelleVoie(?string $libelleVoie): self
    {
        $this->initialized['libelleVoie'] = true;
        $this->libelleVoie = $libelleVoie;

        return $this;
    }

    /**
     * Complément de l'adresse du siège social.
     */
    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    /**
     * Complément de l'adresse du siège social.
     */
    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->initialized['complementAdresse'] = true;
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Complément de distribution du siege social.
     */
    public function getDistribution(): ?string
    {
        return $this->distribution;
    }

    /**
     * Complément de distribution du siege social.
     */
    public function setDistribution(?string $distribution): self
    {
        $this->initialized['distribution'] = true;
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * Adresse complète du siège social.
     */
    public function getAdresseLigne1(): ?string
    {
        return $this->adresseLigne1;
    }

    /**
     * Adresse complète du siège social.
     */
    public function setAdresseLigne1(?string $adresseLigne1): self
    {
        $this->initialized['adresseLigne1'] = true;
        $this->adresseLigne1 = $adresseLigne1;

        return $this;
    }

    /**
     * Renseignement supplémentaire à l'adresse du siège social.
     */
    public function getAdresseLigne2(): ?string
    {
        return $this->adresseLigne2;
    }

    /**
     * Renseignement supplémentaire à l'adresse du siège social.
     */
    public function setAdresseLigne2(?string $adresseLigne2): self
    {
        $this->initialized['adresseLigne2'] = true;
        $this->adresseLigne2 = $adresseLigne2;

        return $this;
    }
}
