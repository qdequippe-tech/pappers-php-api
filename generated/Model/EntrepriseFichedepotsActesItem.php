<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichedepotsActesItem extends \ArrayObject
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
     * Date de dépôt de l'acte, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateDepot;
    /**
     * Date de dépôt formatée de l'acte, au format JJ/MM/AAAA.
     *
     * @var string|null
     */
    protected $dateDepotFormate;
    /**
     * Disponibilité de l'acte. Un acte peut être indisponible car il a été publié avant le 1er janvier 1993 ou bien car il est confidentiel.
     *
     * @var bool|null
     */
    protected $disponible;
    /**
     * Nom du fichier pdf de l'acte.
     *
     * @var string|null
     */
    protected $nomFichierPdf;
    /**
     * Token de l'acte.
     *
     * @var string|null
     */
    protected $token;
    /**
     * Détails de l'acte.
     *
     * @var list<EntrepriseFichedepotsActesItemActesItem>|null
     */
    protected $actes;

    /**
     * Date de dépôt de l'acte, au format AAAA-MM-JJ.
     */
    public function getDateDepot(): ?\DateTime
    {
        return $this->dateDepot;
    }

    /**
     * Date de dépôt de l'acte, au format AAAA-MM-JJ.
     */
    public function setDateDepot(?\DateTime $dateDepot): self
    {
        $this->initialized['dateDepot'] = true;
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Date de dépôt formatée de l'acte, au format JJ/MM/AAAA.
     */
    public function getDateDepotFormate(): ?string
    {
        return $this->dateDepotFormate;
    }

    /**
     * Date de dépôt formatée de l'acte, au format JJ/MM/AAAA.
     */
    public function setDateDepotFormate(?string $dateDepotFormate): self
    {
        $this->initialized['dateDepotFormate'] = true;
        $this->dateDepotFormate = $dateDepotFormate;

        return $this;
    }

    /**
     * Disponibilité de l'acte. Un acte peut être indisponible car il a été publié avant le 1er janvier 1993 ou bien car il est confidentiel.
     */
    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    /**
     * Disponibilité de l'acte. Un acte peut être indisponible car il a été publié avant le 1er janvier 1993 ou bien car il est confidentiel.
     */
    public function setDisponible(?bool $disponible): self
    {
        $this->initialized['disponible'] = true;
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Nom du fichier pdf de l'acte.
     */
    public function getNomFichierPdf(): ?string
    {
        return $this->nomFichierPdf;
    }

    /**
     * Nom du fichier pdf de l'acte.
     */
    public function setNomFichierPdf(?string $nomFichierPdf): self
    {
        $this->initialized['nomFichierPdf'] = true;
        $this->nomFichierPdf = $nomFichierPdf;

        return $this;
    }

    /**
     * Token de l'acte.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Token de l'acte.
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    /**
     * Détails de l'acte.
     *
     * @return list<EntrepriseFichedepotsActesItemActesItem>|null
     */
    public function getActes(): ?array
    {
        return $this->actes;
    }

    /**
     * Détails de l'acte.
     *
     * @param list<EntrepriseFichedepotsActesItemActesItem>|null $actes
     */
    public function setActes(?array $actes): self
    {
        $this->initialized['actes'] = true;
        $this->actes = $actes;

        return $this;
    }
}
