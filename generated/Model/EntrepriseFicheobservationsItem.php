<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheobservationsItem extends \ArrayObject
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
     * Numéro de l'observation.
     *
     * @var int|null
     */
    protected $numero;
    /**
     * Date d'ajout de l'observation, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateAjout;
    /**
     * Texte de l'observation.
     *
     * @var string|null
     */
    protected $texte;
    /**
     * État de l'observation.
     *
     * @var string|null
     */
    protected $etat;
    /**
     * Date de modification de l'observation, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateModification;
    /**
     * Date de suppression de l'observation, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateSuppression;

    /**
     * Numéro de l'observation.
     */
    public function getNumero(): ?int
    {
        return $this->numero;
    }

    /**
     * Numéro de l'observation.
     */
    public function setNumero(?int $numero): self
    {
        $this->initialized['numero'] = true;
        $this->numero = $numero;

        return $this;
    }

    /**
     * Date d'ajout de l'observation, au format AAAA-MM-JJ.
     */
    public function getDateAjout(): ?\DateTime
    {
        return $this->dateAjout;
    }

    /**
     * Date d'ajout de l'observation, au format AAAA-MM-JJ.
     */
    public function setDateAjout(?\DateTime $dateAjout): self
    {
        $this->initialized['dateAjout'] = true;
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Texte de l'observation.
     */
    public function getTexte(): ?string
    {
        return $this->texte;
    }

    /**
     * Texte de l'observation.
     */
    public function setTexte(?string $texte): self
    {
        $this->initialized['texte'] = true;
        $this->texte = $texte;

        return $this;
    }

    /**
     * État de l'observation.
     */
    public function getEtat(): ?string
    {
        return $this->etat;
    }

    /**
     * État de l'observation.
     */
    public function setEtat(?string $etat): self
    {
        $this->initialized['etat'] = true;
        $this->etat = $etat;

        return $this;
    }

    /**
     * Date de modification de l'observation, au format AAAA-MM-JJ.
     */
    public function getDateModification(): ?\DateTime
    {
        return $this->dateModification;
    }

    /**
     * Date de modification de l'observation, au format AAAA-MM-JJ.
     */
    public function setDateModification(?\DateTime $dateModification): self
    {
        $this->initialized['dateModification'] = true;
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Date de suppression de l'observation, au format AAAA-MM-JJ.
     */
    public function getDateSuppression(): ?\DateTime
    {
        return $this->dateSuppression;
    }

    /**
     * Date de suppression de l'observation, au format AAAA-MM-JJ.
     */
    public function setDateSuppression(?\DateTime $dateSuppression): self
    {
        $this->initialized['dateSuppression'] = true;
        $this->dateSuppression = $dateSuppression;

        return $this;
    }
}
