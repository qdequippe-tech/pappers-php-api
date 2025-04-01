<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntrepriseFermetureEtablissementItem extends \ArrayObject
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
     * SIRET de l'établissement.
     *
     * @var string|null
     */
    protected $siret;
    /**
     * Numéro de voie de l'établissement.
     *
     * @var float|null
     */
    protected $numeroVoie;
    /**
     * Indice de répétition de l'établissement.
     *
     * @var string|null
     */
    protected $indiceRepetition;
    /**
     * Type de voie de l'établissement.
     *
     * @var string|null
     */
    protected $typeVoie;
    /**
     * Libellé de la voie de l'établissement.
     *
     * @var string|null
     */
    protected $libelleVoie;
    /**
     * Complément d'adresse de l'établissement.
     *
     * @var string|null
     */
    protected $complementAdresse;
    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     *
     * @var string|null
     */
    protected $adresseLigne1;
    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     *
     * @var string|null
     */
    protected $adresseLigne2;
    /**
     * Code postal de l'établissement.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Ville de l'établissement.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Pays de l'établissement.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Code du pays de l'établissement.
     *
     * @var string|null
     */
    protected $codePays;
    /**
     * Date de fermeture de l'établissement au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;

    /**
     * SIRET de l'établissement.
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * SIRET de l'établissement.
     */
    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    /**
     * Numéro de voie de l'établissement.
     */
    public function getNumeroVoie(): ?float
    {
        return $this->numeroVoie;
    }

    /**
     * Numéro de voie de l'établissement.
     */
    public function setNumeroVoie(?float $numeroVoie): self
    {
        $this->initialized['numeroVoie'] = true;
        $this->numeroVoie = $numeroVoie;

        return $this;
    }

    /**
     * Indice de répétition de l'établissement.
     */
    public function getIndiceRepetition(): ?string
    {
        return $this->indiceRepetition;
    }

    /**
     * Indice de répétition de l'établissement.
     */
    public function setIndiceRepetition(?string $indiceRepetition): self
    {
        $this->initialized['indiceRepetition'] = true;
        $this->indiceRepetition = $indiceRepetition;

        return $this;
    }

    /**
     * Type de voie de l'établissement.
     */
    public function getTypeVoie(): ?string
    {
        return $this->typeVoie;
    }

    /**
     * Type de voie de l'établissement.
     */
    public function setTypeVoie(?string $typeVoie): self
    {
        $this->initialized['typeVoie'] = true;
        $this->typeVoie = $typeVoie;

        return $this;
    }

    /**
     * Libellé de la voie de l'établissement.
     */
    public function getLibelleVoie(): ?string
    {
        return $this->libelleVoie;
    }

    /**
     * Libellé de la voie de l'établissement.
     */
    public function setLibelleVoie(?string $libelleVoie): self
    {
        $this->initialized['libelleVoie'] = true;
        $this->libelleVoie = $libelleVoie;

        return $this;
    }

    /**
     * Complément d'adresse de l'établissement.
     */
    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    /**
     * Complément d'adresse de l'établissement.
     */
    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->initialized['complementAdresse'] = true;
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     */
    public function getAdresseLigne1(): ?string
    {
        return $this->adresseLigne1;
    }

    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     */
    public function setAdresseLigne1(?string $adresseLigne1): self
    {
        $this->initialized['adresseLigne1'] = true;
        $this->adresseLigne1 = $adresseLigne1;

        return $this;
    }

    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     */
    public function getAdresseLigne2(): ?string
    {
        return $this->adresseLigne2;
    }

    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     */
    public function setAdresseLigne2(?string $adresseLigne2): self
    {
        $this->initialized['adresseLigne2'] = true;
        $this->adresseLigne2 = $adresseLigne2;

        return $this;
    }

    /**
     * Code postal de l'établissement.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal de l'établissement.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Ville de l'établissement.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville de l'établissement.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Pays de l'établissement.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays de l'établissement.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code du pays de l'établissement.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code du pays de l'établissement.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Date de fermeture de l'établissement au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de fermeture de l'établissement au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
