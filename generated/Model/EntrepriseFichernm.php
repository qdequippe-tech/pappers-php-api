<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichernm extends \ArrayObject
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
     * Date d'immatriculation au Répertoire des Métiers, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateImmatriculation;
    /**
     * Date de radiation du Répertoire des Métiers, le cas échéant, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateRadiation;
    /**
     * Date de début d'activé déclarée au Répertoire des Métiers, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateDebutActivite;
    /**
     * Date de cessation d'activité déclarée au Répertoire des Métiers, le cas échéant, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateCessationActivite;
    /**
     * Chambre des métiers où l'entreprise est immatriculée.
     *
     * @var string|null
     */
    protected $chambreDesMetiers;
    /**
     * Qualification retenue par le Répertoire des Métiers.
     *
     * @var string|null
     */
    protected $qualification;
    /**
     * Date de dernière mise à jour de l'entreprise au Répertoire des Métiers, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $derniereMiseAJour;

    /**
     * Date d'immatriculation au Répertoire des Métiers, au format AAAA-MM-JJ.
     */
    public function getDateImmatriculation(): ?string
    {
        return $this->dateImmatriculation;
    }

    /**
     * Date d'immatriculation au Répertoire des Métiers, au format AAAA-MM-JJ.
     */
    public function setDateImmatriculation(?string $dateImmatriculation): self
    {
        $this->initialized['dateImmatriculation'] = true;
        $this->dateImmatriculation = $dateImmatriculation;

        return $this;
    }

    /**
     * Date de radiation du Répertoire des Métiers, le cas échéant, au format AAAA-MM-JJ.
     */
    public function getDateRadiation(): ?string
    {
        return $this->dateRadiation;
    }

    /**
     * Date de radiation du Répertoire des Métiers, le cas échéant, au format AAAA-MM-JJ.
     */
    public function setDateRadiation(?string $dateRadiation): self
    {
        $this->initialized['dateRadiation'] = true;
        $this->dateRadiation = $dateRadiation;

        return $this;
    }

    /**
     * Date de début d'activé déclarée au Répertoire des Métiers, au format AAAA-MM-JJ.
     */
    public function getDateDebutActivite(): ?string
    {
        return $this->dateDebutActivite;
    }

    /**
     * Date de début d'activé déclarée au Répertoire des Métiers, au format AAAA-MM-JJ.
     */
    public function setDateDebutActivite(?string $dateDebutActivite): self
    {
        $this->initialized['dateDebutActivite'] = true;
        $this->dateDebutActivite = $dateDebutActivite;

        return $this;
    }

    /**
     * Date de cessation d'activité déclarée au Répertoire des Métiers, le cas échéant, au format AAAA-MM-JJ.
     */
    public function getDateCessationActivite(): ?string
    {
        return $this->dateCessationActivite;
    }

    /**
     * Date de cessation d'activité déclarée au Répertoire des Métiers, le cas échéant, au format AAAA-MM-JJ.
     */
    public function setDateCessationActivite(?string $dateCessationActivite): self
    {
        $this->initialized['dateCessationActivite'] = true;
        $this->dateCessationActivite = $dateCessationActivite;

        return $this;
    }

    /**
     * Chambre des métiers où l'entreprise est immatriculée.
     */
    public function getChambreDesMetiers(): ?string
    {
        return $this->chambreDesMetiers;
    }

    /**
     * Chambre des métiers où l'entreprise est immatriculée.
     */
    public function setChambreDesMetiers(?string $chambreDesMetiers): self
    {
        $this->initialized['chambreDesMetiers'] = true;
        $this->chambreDesMetiers = $chambreDesMetiers;

        return $this;
    }

    /**
     * Qualification retenue par le Répertoire des Métiers.
     */
    public function getQualification(): ?string
    {
        return $this->qualification;
    }

    /**
     * Qualification retenue par le Répertoire des Métiers.
     */
    public function setQualification(?string $qualification): self
    {
        $this->initialized['qualification'] = true;
        $this->qualification = $qualification;

        return $this;
    }

    /**
     * Date de dernière mise à jour de l'entreprise au Répertoire des Métiers, au format AAAA-MM-JJ.
     */
    public function getDerniereMiseAJour(): ?string
    {
        return $this->derniereMiseAJour;
    }

    /**
     * Date de dernière mise à jour de l'entreprise au Répertoire des Métiers, au format AAAA-MM-JJ.
     */
    public function setDerniereMiseAJour(?string $derniereMiseAJour): self
    {
        $this->initialized['derniereMiseAJour'] = true;
        $this->derniereMiseAJour = $derniereMiseAJour;

        return $this;
    }
}
