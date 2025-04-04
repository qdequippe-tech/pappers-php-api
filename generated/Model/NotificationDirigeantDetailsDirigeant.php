<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationDirigeantDetailsDirigeant extends \ArrayObject
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
     * Nom du dirigeant.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Prénom du dirigeant.
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Date de naissance du dirigeant au format AAAA-MM.
     *
     * @var string|null
     */
    protected $dateDeNaissanceRgpd;
    /**
     * SIREN du dirigeant.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Dénomination du dirigeant.
     *
     * @var string|null
     */
    protected $denomination;

    /**
     * Nom du dirigeant.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom du dirigeant.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Prénom du dirigeant.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénom du dirigeant.
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Date de naissance du dirigeant au format AAAA-MM.
     */
    public function getDateDeNaissanceRgpd(): ?string
    {
        return $this->dateDeNaissanceRgpd;
    }

    /**
     * Date de naissance du dirigeant au format AAAA-MM.
     */
    public function setDateDeNaissanceRgpd(?string $dateDeNaissanceRgpd): self
    {
        $this->initialized['dateDeNaissanceRgpd'] = true;
        $this->dateDeNaissanceRgpd = $dateDeNaissanceRgpd;

        return $this;
    }

    /**
     * SIREN du dirigeant.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN du dirigeant.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Dénomination du dirigeant.
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination du dirigeant.
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }
}
