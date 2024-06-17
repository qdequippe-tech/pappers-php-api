<?php

namespace Qdequippe\Pappers\Api\Model;

class LabelsBase extends \ArrayObject
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
     * Label RGE seulement : Liste des certificats.
     *
     * @var list<mixed>|null
     */
    protected $certificats;
    /**
     * Label QUALIOPI seulement : Liste des spécialités.
     *
     * @var list<mixed>|null
     */
    protected $specialites;
    /**
     * Label EGALITE seulement : Liste des notes.
     *
     * @var list<mixed>|null
     */
    protected $notes;
    /**
     * Label ORIAS seulement : Numéro d'immatriculation ORIAS. Uniquement présent si demandé avec le champ supplémentaire `label:orias`.
     *
     * @var string|null
     */
    protected $numeroImmatriculation;
    /**
     * Label ORIAS seulement : Liste des inscriptions ORIAS. Uniquement présent si demandé avec le champ supplémentaire `label:orias`.
     *
     * @var list<LabelsBaseInscriptionsItem>|null
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
     * Label RGE seulement : Liste des certificats.
     *
     * @return list<mixed>|null
     */
    public function getCertificats(): ?array
    {
        return $this->certificats;
    }

    /**
     * Label RGE seulement : Liste des certificats.
     *
     * @param list<mixed>|null $certificats
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
     * @return list<mixed>|null
     */
    public function getSpecialites(): ?array
    {
        return $this->specialites;
    }

    /**
     * Label QUALIOPI seulement : Liste des spécialités.
     *
     * @param list<mixed>|null $specialites
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
     * @return list<mixed>|null
     */
    public function getNotes(): ?array
    {
        return $this->notes;
    }

    /**
     * Label EGALITE seulement : Liste des notes.
     *
     * @param list<mixed>|null $notes
     */
    public function setNotes(?array $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }

    /**
     * Label ORIAS seulement : Numéro d'immatriculation ORIAS. Uniquement présent si demandé avec le champ supplémentaire `label:orias`.
     */
    public function getNumeroImmatriculation(): ?string
    {
        return $this->numeroImmatriculation;
    }

    /**
     * Label ORIAS seulement : Numéro d'immatriculation ORIAS. Uniquement présent si demandé avec le champ supplémentaire `label:orias`.
     */
    public function setNumeroImmatriculation(?string $numeroImmatriculation): self
    {
        $this->initialized['numeroImmatriculation'] = true;
        $this->numeroImmatriculation = $numeroImmatriculation;

        return $this;
    }

    /**
     * Label ORIAS seulement : Liste des inscriptions ORIAS. Uniquement présent si demandé avec le champ supplémentaire `label:orias`.
     *
     * @return list<LabelsBaseInscriptionsItem>|null
     */
    public function getInscriptions(): ?array
    {
        return $this->inscriptions;
    }

    /**
     * Label ORIAS seulement : Liste des inscriptions ORIAS. Uniquement présent si demandé avec le champ supplémentaire `label:orias`.
     *
     * @param list<LabelsBaseInscriptionsItem>|null $inscriptions
     */
    public function setInscriptions(?array $inscriptions): self
    {
        $this->initialized['inscriptions'] = true;
        $this->inscriptions = $inscriptions;

        return $this;
    }
}
