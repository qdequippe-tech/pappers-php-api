<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseBaseConventionsCollectivesItem extends \ArrayObject
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
     * Nom de la convention collective.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Code IDCC de l'entreprise.
     *
     * @var int|null
     */
    protected $idcc;
    /**
     * Si confirmée, l'information est issue de la DSN de l'entreprise et fournie par le ministère du Travail. Si non confirmée, ce n'est qu'une estimation à partir du code NAF de l'entreprise.
     *
     * @var bool|null
     */
    protected $confirmee;
    /**
     * Pourcentage de fiabilité de l'estimation. Si la convention est confirmée, vaut null.
     *
     * @var float|null
     */
    protected $pourcentage;

    /**
     * Nom de la convention collective.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de la convention collective.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Code IDCC de l'entreprise.
     */
    public function getIdcc(): ?int
    {
        return $this->idcc;
    }

    /**
     * Code IDCC de l'entreprise.
     */
    public function setIdcc(?int $idcc): self
    {
        $this->initialized['idcc'] = true;
        $this->idcc = $idcc;

        return $this;
    }

    /**
     * Si confirmée, l'information est issue de la DSN de l'entreprise et fournie par le ministère du Travail. Si non confirmée, ce n'est qu'une estimation à partir du code NAF de l'entreprise.
     */
    public function getConfirmee(): ?bool
    {
        return $this->confirmee;
    }

    /**
     * Si confirmée, l'information est issue de la DSN de l'entreprise et fournie par le ministère du Travail. Si non confirmée, ce n'est qu'une estimation à partir du code NAF de l'entreprise.
     */
    public function setConfirmee(?bool $confirmee): self
    {
        $this->initialized['confirmee'] = true;
        $this->confirmee = $confirmee;

        return $this;
    }

    /**
     * Pourcentage de fiabilité de l'estimation. Si la convention est confirmée, vaut null.
     */
    public function getPourcentage(): ?float
    {
        return $this->pourcentage;
    }

    /**
     * Pourcentage de fiabilité de l'estimation. Si la convention est confirmée, vaut null.
     */
    public function setPourcentage(?float $pourcentage): self
    {
        $this->initialized['pourcentage'] = true;
        $this->pourcentage = $pourcentage;

        return $this;
    }
}
