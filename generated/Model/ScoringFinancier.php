<?php

namespace Qdequippe\Pappers\Api\Model;

class ScoringFinancier extends \ArrayObject
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
     * Note du score extra-financier de l'entreprise.
     *
     * @var string|null
     */
    protected $note;
    /**
     * Score extra-financier de l'entreprise.
     *
     * @var float|null
     */
    protected $score;
    /**
     * Date de clôture des comptes de l'entreprise.
     *
     * @var string|null
     */
    protected $dateClotureComptes;
    /**
     * Détails du score financier.
     *
     * @var ScoringFinancierDetailsScore|null
     */
    protected $detailsScore;
    /**
     * Date de calcul du score extra-financier de l'entreprise.
     *
     * @var string|null
     */
    protected $dateCalcul;
    /**
     * Erreur lors du calcul du score extra-financier de l'entreprise.
     *
     * @var string|null
     */
    protected $erreur;

    /**
     * Note du score extra-financier de l'entreprise.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Note du score extra-financier de l'entreprise.
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    /**
     * Score extra-financier de l'entreprise.
     */
    public function getScore(): ?float
    {
        return $this->score;
    }

    /**
     * Score extra-financier de l'entreprise.
     */
    public function setScore(?float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;

        return $this;
    }

    /**
     * Date de clôture des comptes de l'entreprise.
     */
    public function getDateClotureComptes(): ?string
    {
        return $this->dateClotureComptes;
    }

    /**
     * Date de clôture des comptes de l'entreprise.
     */
    public function setDateClotureComptes(?string $dateClotureComptes): self
    {
        $this->initialized['dateClotureComptes'] = true;
        $this->dateClotureComptes = $dateClotureComptes;

        return $this;
    }

    /**
     * Détails du score financier.
     */
    public function getDetailsScore(): ?ScoringFinancierDetailsScore
    {
        return $this->detailsScore;
    }

    /**
     * Détails du score financier.
     */
    public function setDetailsScore(?ScoringFinancierDetailsScore $detailsScore): self
    {
        $this->initialized['detailsScore'] = true;
        $this->detailsScore = $detailsScore;

        return $this;
    }

    /**
     * Date de calcul du score extra-financier de l'entreprise.
     */
    public function getDateCalcul(): ?string
    {
        return $this->dateCalcul;
    }

    /**
     * Date de calcul du score extra-financier de l'entreprise.
     */
    public function setDateCalcul(?string $dateCalcul): self
    {
        $this->initialized['dateCalcul'] = true;
        $this->dateCalcul = $dateCalcul;

        return $this;
    }

    /**
     * Erreur lors du calcul du score extra-financier de l'entreprise.
     */
    public function getErreur(): ?string
    {
        return $this->erreur;
    }

    /**
     * Erreur lors du calcul du score extra-financier de l'entreprise.
     */
    public function setErreur(?string $erreur): self
    {
        $this->initialized['erreur'] = true;
        $this->erreur = $erreur;

        return $this;
    }
}
