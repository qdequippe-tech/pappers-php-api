<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichederniersStatuts extends \ArrayObject
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
     * Date de dépôt des statuts, au format AAAA-MM-JJ.
     *
     * @var \DateTime
     */
    protected $dateDepot;
    /**
     * Date de dépôt formaté des statuts, au format JJ/MM/AAAA.
     *
     * @var string
     */
    protected $dateDepotFormate;
    /**
     * Disponibilité des statuts.
     *
     * @var bool
     */
    protected $disponible;
    /**
     * Nom du fichier pdf des statuts.
     *
     * @var string
     */
    protected $nomFichierPdf;
    /**
     * Token des statuts.
     *
     * @var string
     */
    protected $token;
    /**
     * Champ "type" du document contenant les statuts.
     *
     * @var string
     */
    protected $type;
    /**
     * Champ "decision" du document contenant les statuts.
     *
     * @var string
     */
    protected $decision;
    /**
     * Date de publication des statuts, au format AAAA-MM-JJ.
     *
     * @var \DateTime
     */
    protected $dateActe;
    /**
     * Date de publication des statuts, au format JJ/MM/AAAA.
     *
     * @var string
     */
    protected $dateActeFormate;

    /**
     * Date de dépôt des statuts, au format AAAA-MM-JJ.
     */
    public function getDateDepot(): \DateTime
    {
        return $this->dateDepot;
    }

    /**
     * Date de dépôt des statuts, au format AAAA-MM-JJ.
     */
    public function setDateDepot(\DateTime $dateDepot): self
    {
        $this->initialized['dateDepot'] = true;
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Date de dépôt formaté des statuts, au format JJ/MM/AAAA.
     */
    public function getDateDepotFormate(): string
    {
        return $this->dateDepotFormate;
    }

    /**
     * Date de dépôt formaté des statuts, au format JJ/MM/AAAA.
     */
    public function setDateDepotFormate(string $dateDepotFormate): self
    {
        $this->initialized['dateDepotFormate'] = true;
        $this->dateDepotFormate = $dateDepotFormate;

        return $this;
    }

    /**
     * Disponibilité des statuts.
     */
    public function getDisponible(): bool
    {
        return $this->disponible;
    }

    /**
     * Disponibilité des statuts.
     */
    public function setDisponible(bool $disponible): self
    {
        $this->initialized['disponible'] = true;
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Nom du fichier pdf des statuts.
     */
    public function getNomFichierPdf(): string
    {
        return $this->nomFichierPdf;
    }

    /**
     * Nom du fichier pdf des statuts.
     */
    public function setNomFichierPdf(string $nomFichierPdf): self
    {
        $this->initialized['nomFichierPdf'] = true;
        $this->nomFichierPdf = $nomFichierPdf;

        return $this;
    }

    /**
     * Token des statuts.
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Token des statuts.
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    /**
     * Champ "type" du document contenant les statuts.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Champ "type" du document contenant les statuts.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Champ "decision" du document contenant les statuts.
     */
    public function getDecision(): string
    {
        return $this->decision;
    }

    /**
     * Champ "decision" du document contenant les statuts.
     */
    public function setDecision(string $decision): self
    {
        $this->initialized['decision'] = true;
        $this->decision = $decision;

        return $this;
    }

    /**
     * Date de publication des statuts, au format AAAA-MM-JJ.
     */
    public function getDateActe(): \DateTime
    {
        return $this->dateActe;
    }

    /**
     * Date de publication des statuts, au format AAAA-MM-JJ.
     */
    public function setDateActe(\DateTime $dateActe): self
    {
        $this->initialized['dateActe'] = true;
        $this->dateActe = $dateActe;

        return $this;
    }

    /**
     * Date de publication des statuts, au format JJ/MM/AAAA.
     */
    public function getDateActeFormate(): string
    {
        return $this->dateActeFormate;
    }

    /**
     * Date de publication des statuts, au format JJ/MM/AAAA.
     */
    public function setDateActeFormate(string $dateActeFormate): self
    {
        $this->initialized['dateActeFormate'] = true;
        $this->dateActeFormate = $dateActeFormate;

        return $this;
    }
}
