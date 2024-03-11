<?php

namespace Qdequippe\Pappers\Api\Model;

class ConformitePersonnePhysiqueGetResponse200 extends \ArrayObject
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
     * Informations sur le statut de personne politiquement exposée. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var PersonnePolitiquementExposee|null
     */
    protected $personnePolitiquementExposee;
    /**
     * Vaut vrai si le bénéficiaire effectif est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var bool|null
     */
    protected $sanctionsEnCours;
    /**
     * Liste des sanctions du bénéficiaire effectif. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var Sanction[]|null
     */
    protected $sanctions;

    /**
     * Informations sur le statut de personne politiquement exposée. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getPersonnePolitiquementExposee(): ?PersonnePolitiquementExposee
    {
        return $this->personnePolitiquementExposee;
    }

    /**
     * Informations sur le statut de personne politiquement exposée. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setPersonnePolitiquementExposee(?PersonnePolitiquementExposee $personnePolitiquementExposee): self
    {
        $this->initialized['personnePolitiquementExposee'] = true;
        $this->personnePolitiquementExposee = $personnePolitiquementExposee;

        return $this;
    }

    /**
     * Vaut vrai si le bénéficiaire effectif est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getSanctionsEnCours(): ?bool
    {
        return $this->sanctionsEnCours;
    }

    /**
     * Vaut vrai si le bénéficiaire effectif est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setSanctionsEnCours(?bool $sanctionsEnCours): self
    {
        $this->initialized['sanctionsEnCours'] = true;
        $this->sanctionsEnCours = $sanctionsEnCours;

        return $this;
    }

    /**
     * Liste des sanctions du bénéficiaire effectif. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @return Sanction[]|null
     */
    public function getSanctions(): ?array
    {
        return $this->sanctions;
    }

    /**
     * Liste des sanctions du bénéficiaire effectif. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @param Sanction[]|null $sanctions
     */
    public function setSanctions(?array $sanctions): self
    {
        $this->initialized['sanctions'] = true;
        $this->sanctions = $sanctions;

        return $this;
    }
}
