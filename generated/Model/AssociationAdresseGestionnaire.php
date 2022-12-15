<?php

namespace Qdequippe\Pappers\Api\Model;

class AssociationAdresseGestionnaire extends \ArrayObject
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
     * Nom du gestionnaire de l'association.
     *
     * @var string|null
     */
    protected $gestionnaire;
    /**
     * Code postal du gestionnaire.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Ville du gestionnaire.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Complément de distribution du gestionnaire.
     *
     * @var string|null
     */
    protected $distribution;
    /**
     * Adresse complète du gestionnaire.
     *
     * @var string|null
     */
    protected $adresseLigne;
    /**
     * Complément de l'adresse du gestionnaire.
     *
     * @var string|null
     */
    protected $complementAdresse;
    /**
     * Indication supplémentaire à l'adresse du gestionnaire.
     *
     * @var string|null
     */
    protected $indication;
    /**
     * Pays du gestionnaire.
     *
     * @var string|null
     */
    protected $pays;

    /**
     * Nom du gestionnaire de l'association.
     */
    public function getGestionnaire(): ?string
    {
        return $this->gestionnaire;
    }

    /**
     * Nom du gestionnaire de l'association.
     */
    public function setGestionnaire(?string $gestionnaire): self
    {
        $this->initialized['gestionnaire'] = true;
        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    /**
     * Code postal du gestionnaire.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal du gestionnaire.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Ville du gestionnaire.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville du gestionnaire.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Complément de distribution du gestionnaire.
     */
    public function getDistribution(): ?string
    {
        return $this->distribution;
    }

    /**
     * Complément de distribution du gestionnaire.
     */
    public function setDistribution(?string $distribution): self
    {
        $this->initialized['distribution'] = true;
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * Adresse complète du gestionnaire.
     */
    public function getAdresseLigne(): ?string
    {
        return $this->adresseLigne;
    }

    /**
     * Adresse complète du gestionnaire.
     */
    public function setAdresseLigne(?string $adresseLigne): self
    {
        $this->initialized['adresseLigne'] = true;
        $this->adresseLigne = $adresseLigne;

        return $this;
    }

    /**
     * Complément de l'adresse du gestionnaire.
     */
    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    /**
     * Complément de l'adresse du gestionnaire.
     */
    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->initialized['complementAdresse'] = true;
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Indication supplémentaire à l'adresse du gestionnaire.
     */
    public function getIndication(): ?string
    {
        return $this->indication;
    }

    /**
     * Indication supplémentaire à l'adresse du gestionnaire.
     */
    public function setIndication(?string $indication): self
    {
        $this->initialized['indication'] = true;
        $this->indication = $indication;

        return $this;
    }

    /**
     * Pays du gestionnaire.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays du gestionnaire.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }
}
