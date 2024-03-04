<?php

namespace Qdequippe\Pappers\Api\Model;

class Labels extends \ArrayObject
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
     * Nom du label.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Nombre d'établissements concernés par le label, dans le cas d'un label lié aux établissements. Null sinon.
     *
     * @var int|null
     */
    protected $nbEtablissementsConcernes;
    /**
     * Label RGE seulement : Liste des certificats.
     *
     * @var mixed[]|null
     */
    protected $certificats;
    /**
     * Label QUALIOPI seulement : Liste des spécialités.
     *
     * @var mixed[]|null
     */
    protected $specialites;
    /**
     * Label EGALITE seulement : Liste des notes.
     *
     * @var mixed[]|null
     */
    protected $notes;
    /**
     * Label ORIAS seulement : Numéro d'immatriculation ORIAS.
     *
     * @var string|null
     */
    protected $numeroImmatriculation;
    /**
     * Label ORIAS seulement : Liste des inscriptions ORIAS.
     *
     * @var mixed[]|null
     */
    protected $inscriptions;

    /**
     * Nom du label.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom du label.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Nombre d'établissements concernés par le label, dans le cas d'un label lié aux établissements. Null sinon.
     */
    public function getNbEtablissementsConcernes(): ?int
    {
        return $this->nbEtablissementsConcernes;
    }

    /**
     * Nombre d'établissements concernés par le label, dans le cas d'un label lié aux établissements. Null sinon.
     */
    public function setNbEtablissementsConcernes(?int $nbEtablissementsConcernes): self
    {
        $this->initialized['nbEtablissementsConcernes'] = true;
        $this->nbEtablissementsConcernes = $nbEtablissementsConcernes;

        return $this;
    }

    /**
     * Label RGE seulement : Liste des certificats.
     *
     * @return mixed[]|null
     */
    public function getCertificats(): ?array
    {
        return $this->certificats;
    }

    /**
     * Label RGE seulement : Liste des certificats.
     *
     * @param mixed[]|null $certificats
     */
    public function setCertificats(?array $certificats): self
    {
        $this->initialized['certificats'] = true;
        $this->certificats = $certificats;

        return $this;
    }

    /**
     * Label QUALIOPI seulement : Liste des spécialités.
     *
     * @return mixed[]|null
     */
    public function getSpecialites(): ?array
    {
        return $this->specialites;
    }

    /**
     * Label QUALIOPI seulement : Liste des spécialités.
     *
     * @param mixed[]|null $specialites
     */
    public function setSpecialites(?array $specialites): self
    {
        $this->initialized['specialites'] = true;
        $this->specialites = $specialites;

        return $this;
    }

    /**
     * Label EGALITE seulement : Liste des notes.
     *
     * @return mixed[]|null
     */
    public function getNotes(): ?array
    {
        return $this->notes;
    }

    /**
     * Label EGALITE seulement : Liste des notes.
     *
     * @param mixed[]|null $notes
     */
    public function setNotes(?array $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }

    /**
     * Label ORIAS seulement : Numéro d'immatriculation ORIAS.
     */
    public function getNumeroImmatriculation(): ?string
    {
        return $this->numeroImmatriculation;
    }

    /**
     * Label ORIAS seulement : Numéro d'immatriculation ORIAS.
     */
    public function setNumeroImmatriculation(?string $numeroImmatriculation): self
    {
        $this->initialized['numeroImmatriculation'] = true;
        $this->numeroImmatriculation = $numeroImmatriculation;

        return $this;
    }

    /**
     * Label ORIAS seulement : Liste des inscriptions ORIAS.
     *
     * @return mixed[]|null
     */
    public function getInscriptions(): ?array
    {
        return $this->inscriptions;
    }

    /**
     * Label ORIAS seulement : Liste des inscriptions ORIAS.
     *
     * @param mixed[]|null $inscriptions
     */
    public function setInscriptions(?array $inscriptions): self
    {
        $this->initialized['inscriptions'] = true;
        $this->inscriptions = $inscriptions;

        return $this;
    }
}
