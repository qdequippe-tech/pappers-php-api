<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntrepriseQualiteDirigeantItem extends \ArrayObject
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
     * Prénom du dirigeant (si personne physique).
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Nom du dirigeant (si personne physique).
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Date de naissance du dirigeant (si personne physique).
     *
     * @var string|null
     */
    protected $dateDeNaissanceRgpd;
    /**
     * Dénomination du dirigeant (si personne morale).
     *
     * @var string|null
     */
    protected $denomination;
    /**
     * SIREN du dirigeant (si personne morale).
     *
     * @var string|null
     */
    protected $siren;
    /**
     * @var list<string>|null
     */
    protected $valeur;
    /**
     * @var list<string>|null
     */
    protected $ancienneValeur;
    /**
     * Date de modification de la qualité du dirigeant au format DD/MM/AAAA.
     *
     * @var string|null
     */
    protected $date;

    /**
     * Prénom du dirigeant (si personne physique).
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénom du dirigeant (si personne physique).
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Nom du dirigeant (si personne physique).
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom du dirigeant (si personne physique).
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Date de naissance du dirigeant (si personne physique).
     */
    public function getDateDeNaissanceRgpd(): ?string
    {
        return $this->dateDeNaissanceRgpd;
    }

    /**
     * Date de naissance du dirigeant (si personne physique).
     */
    public function setDateDeNaissanceRgpd(?string $dateDeNaissanceRgpd): self
    {
        $this->initialized['dateDeNaissanceRgpd'] = true;
        $this->dateDeNaissanceRgpd = $dateDeNaissanceRgpd;

        return $this;
    }

    /**
     * Dénomination du dirigeant (si personne morale).
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination du dirigeant (si personne morale).
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * SIREN du dirigeant (si personne morale).
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN du dirigeant (si personne morale).
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getValeur(): ?array
    {
        return $this->valeur;
    }

    /**
     * @param list<string>|null $valeur
     */
    public function setValeur(?array $valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getAncienneValeur(): ?array
    {
        return $this->ancienneValeur;
    }

    /**
     * @param list<string>|null $ancienneValeur
     */
    public function setAncienneValeur(?array $ancienneValeur): self
    {
        $this->initialized['ancienneValeur'] = true;
        $this->ancienneValeur = $ancienneValeur;

        return $this;
    }

    /**
     * Date de modification de la qualité du dirigeant au format DD/MM/AAAA.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de modification de la qualité du dirigeant au format DD/MM/AAAA.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
