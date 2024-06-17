<?php

namespace Qdequippe\Pappers\Api\Model;

class LabelsBaseInscriptionsItem extends \ArrayObject
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
     * Code Catégorie de l'inscription ORIAS.
     *
     * @var string|null
     */
    protected $categorie;
    /**
     * Libellé de la catégorie de l'inscription ORIAS.
     *
     * @var string|null
     */
    protected $labelCategorie;
    /**
     * Statut de l'inscription ORIAS.
     *
     * @var string|null
     */
    protected $statut;
    /**
     * Date de l'inscription ORIAS.
     *
     * @var string|null
     */
    protected $dateInscription;
    /**
     * Vrai si l'inscription ORIAS permet d'encaisser des fonds.
     *
     * @var bool|null
     */
    protected $encaisseFonds;
    /**
     * Liste des activités de l'inscription ORIAS.
     *
     * @var list<mixed>|null
     */
    protected $activites;

    /**
     * Code Catégorie de l'inscription ORIAS.
     */
    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    /**
     * Code Catégorie de l'inscription ORIAS.
     */
    public function setCategorie(?string $categorie): self
    {
        $this->initialized['categorie'] = true;
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Libellé de la catégorie de l'inscription ORIAS.
     */
    public function getLabelCategorie(): ?string
    {
        return $this->labelCategorie;
    }

    /**
     * Libellé de la catégorie de l'inscription ORIAS.
     */
    public function setLabelCategorie(?string $labelCategorie): self
    {
        $this->initialized['labelCategorie'] = true;
        $this->labelCategorie = $labelCategorie;

        return $this;
    }

    /**
     * Statut de l'inscription ORIAS.
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * Statut de l'inscription ORIAS.
     */
    public function setStatut(?string $statut): self
    {
        $this->initialized['statut'] = true;
        $this->statut = $statut;

        return $this;
    }

    /**
     * Date de l'inscription ORIAS.
     */
    public function getDateInscription(): ?string
    {
        return $this->dateInscription;
    }

    /**
     * Date de l'inscription ORIAS.
     */
    public function setDateInscription(?string $dateInscription): self
    {
        $this->initialized['dateInscription'] = true;
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Vrai si l'inscription ORIAS permet d'encaisser des fonds.
     */
    public function getEncaisseFonds(): ?bool
    {
        return $this->encaisseFonds;
    }

    /**
     * Vrai si l'inscription ORIAS permet d'encaisser des fonds.
     */
    public function setEncaisseFonds(?bool $encaisseFonds): self
    {
        $this->initialized['encaisseFonds'] = true;
        $this->encaisseFonds = $encaisseFonds;

        return $this;
    }

    /**
     * Liste des activités de l'inscription ORIAS.
     *
     * @return list<mixed>|null
     */
    public function getActivites(): ?array
    {
        return $this->activites;
    }

    /**
     * Liste des activités de l'inscription ORIAS.
     *
     * @param list<mixed>|null $activites
     */
    public function setActivites(?array $activites): self
    {
        $this->initialized['activites'] = true;
        $this->activites = $activites;

        return $this;
    }
}
