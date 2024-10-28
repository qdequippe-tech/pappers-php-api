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
     * Label ORIAS et CCI seulement : Numéro d'immatriculation ORIAS ou CCI. Uniquement présent si demandé avec le champ supplémentaire `label:orias` ou `label:cci`.
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
     * Label CCI seulement : Liste des mentions.
     *
     * @var list<string>|null
     */
    protected $mentions;
    /**
     * Nombre d'établissements concernés par le label, dans le cas d'un label lié aux établissements. Null sinon.
     *
     * @var int|null
     */
    protected $nbEtablissementsConcernes;

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
     * Label ORIAS et CCI seulement : Numéro d'immatriculation ORIAS ou CCI. Uniquement présent si demandé avec le champ supplémentaire `label:orias` ou `label:cci`.
     */
    public function getNumeroImmatriculation(): ?string
    {
        return $this->numeroImmatriculation;
    }

    /**
     * Label ORIAS et CCI seulement : Numéro d'immatriculation ORIAS ou CCI. Uniquement présent si demandé avec le champ supplémentaire `label:orias` ou `label:cci`.
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

    /**
     * Label CCI seulement : Liste des mentions.
     *
     * @return list<string>|null
     */
    public function getMentions(): ?array
    {
        return $this->mentions;
    }

    /**
     * Label CCI seulement : Liste des mentions.
     *
     * @param list<string>|null $mentions
     */
    public function setMentions(?array $mentions): self
    {
        $this->initialized['mentions'] = true;
        $this->mentions = $mentions;

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
}
