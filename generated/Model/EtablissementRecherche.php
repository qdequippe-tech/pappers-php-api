<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class EtablissementRecherche extends \ArrayObject
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
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     *
     * @var string
     */
    protected $siret;
    /**
     * Numéro siret de l'établissement au format xxx xxx xxx xxxxx.
     *
     * @var string
     */
    protected $siretFormate;
    /**
     * Numéro NIC de l'établissement.
     *
     * @var string
     */
    protected $nic;
    /**
     * Numéro de voie de l'établissement.
     *
     * @var int
     */
    protected $numeroVoie;
    /**
     * Indice de répétition de l'établissement.
     *
     * @var string
     */
    protected $indiceRepetition;
    /**
     * Type de voie de l'établissement.
     *
     * @var string
     */
    protected $typeVoie;
    /**
     * Libellé de la voie de l'établissement.
     *
     * @var string
     */
    protected $libelleVoie;
    /**
     * Complément d'adresse de l'établissement.
     *
     * @var string
     */
    protected $complementAdresse;
    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     *
     * @var string
     */
    protected $adresseLigne1;
    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     *
     * @var string
     */
    protected $adresseLigne2;
    /**
     * Code postal de l'établissement.
     *
     * @var string
     */
    protected $codePostal;
    /**
     * Ville de l'établissement.
     *
     * @var string
     */
    protected $ville;
    /**
     * Latitude de l'établissement.
     *
     * @var float
     */
    protected $latitude;
    /**
     * Longitude de l'établissement.
     *
     * @var float
     */
    protected $longitude;

    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     */
    public function getSiret(): string
    {
        return $this->siret;
    }

    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     */
    public function setSiret(string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    /**
     * Numéro siret de l'établissement au format xxx xxx xxx xxxxx.
     */
    public function getSiretFormate(): string
    {
        return $this->siretFormate;
    }

    /**
     * Numéro siret de l'établissement au format xxx xxx xxx xxxxx.
     */
    public function setSiretFormate(string $siretFormate): self
    {
        $this->initialized['siretFormate'] = true;
        $this->siretFormate = $siretFormate;

        return $this;
    }

    /**
     * Numéro NIC de l'établissement.
     */
    public function getNic(): string
    {
        return $this->nic;
    }

    /**
     * Numéro NIC de l'établissement.
     */
    public function setNic(string $nic): self
    {
        $this->initialized['nic'] = true;
        $this->nic = $nic;

        return $this;
    }

    /**
     * Numéro de voie de l'établissement.
     */
    public function getNumeroVoie(): int
    {
        return $this->numeroVoie;
    }

    /**
     * Numéro de voie de l'établissement.
     */
    public function setNumeroVoie(int $numeroVoie): self
    {
        $this->initialized['numeroVoie'] = true;
        $this->numeroVoie = $numeroVoie;

        return $this;
    }

    /**
     * Indice de répétition de l'établissement.
     */
    public function getIndiceRepetition(): string
    {
        return $this->indiceRepetition;
    }

    /**
     * Indice de répétition de l'établissement.
     */
    public function setIndiceRepetition(string $indiceRepetition): self
    {
        $this->initialized['indiceRepetition'] = true;
        $this->indiceRepetition = $indiceRepetition;

        return $this;
    }

    /**
     * Type de voie de l'établissement.
     */
    public function getTypeVoie(): string
    {
        return $this->typeVoie;
    }

    /**
     * Type de voie de l'établissement.
     */
    public function setTypeVoie(string $typeVoie): self
    {
        $this->initialized['typeVoie'] = true;
        $this->typeVoie = $typeVoie;

        return $this;
    }

    /**
     * Libellé de la voie de l'établissement.
     */
    public function getLibelleVoie(): string
    {
        return $this->libelleVoie;
    }

    /**
     * Libellé de la voie de l'établissement.
     */
    public function setLibelleVoie(string $libelleVoie): self
    {
        $this->initialized['libelleVoie'] = true;
        $this->libelleVoie = $libelleVoie;

        return $this;
    }

    /**
     * Complément d'adresse de l'établissement.
     */
    public function getComplementAdresse(): string
    {
        return $this->complementAdresse;
    }

    /**
     * Complément d'adresse de l'établissement.
     */
    public function setComplementAdresse(string $complementAdresse): self
    {
        $this->initialized['complementAdresse'] = true;
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     */
    public function getAdresseLigne1(): string
    {
        return $this->adresseLigne1;
    }

    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     */
    public function setAdresseLigne1(string $adresseLigne1): self
    {
        $this->initialized['adresseLigne1'] = true;
        $this->adresseLigne1 = $adresseLigne1;

        return $this;
    }

    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     */
    public function getAdresseLigne2(): string
    {
        return $this->adresseLigne2;
    }

    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     */
    public function setAdresseLigne2(string $adresseLigne2): self
    {
        $this->initialized['adresseLigne2'] = true;
        $this->adresseLigne2 = $adresseLigne2;

        return $this;
    }

    /**
     * Code postal de l'établissement.
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * Code postal de l'établissement.
     */
    public function setCodePostal(string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Ville de l'établissement.
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * Ville de l'établissement.
     */
    public function setVille(string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Latitude de l'établissement.
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Latitude de l'établissement.
     */
    public function setLatitude(float $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Longitude de l'établissement.
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Longitude de l'établissement.
     */
    public function setLongitude(float $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;

        return $this;
    }
}
