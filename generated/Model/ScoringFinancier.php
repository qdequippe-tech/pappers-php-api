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
     * Note du score non financier de l'entreprise.
     *
     * @var string|null
     */
    protected $note;
    /**
     * Score non financier de l'entreprise, entre 0 et 20.
     *
     * @var int|null
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
     * Date de calcul du score non financier de l'entreprise.
     *
     * @var string|null
     */
    protected $dateCalcul;
    /**
     * Erreur lors du calcul du score non financier de l'entreprise.
     *
     * @var string|null
     */
    protected $erreur;

    /**
     * Note du score non financier de l'entreprise.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Note du score non financier de l'entreprise.
     */
    public function setNote(?string $note): self
    {
        $this->initialized['note'] = true;
        $this->note = $note;

        return $this;
    }

    /**
     * Score non financier de l'entreprise, entre 0 et 20.
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * Score non financier de l'entreprise, entre 0 et 20.
     */
    public function setScore(?int $score): self
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
     * Date de calcul du score non financier de l'entreprise.
     */
    public function getDateCalcul(): ?string
    {
        return $this->dateCalcul;
    }

    /**
     * Date de calcul du score non financier de l'entreprise.
     */
    public function setDateCalcul(?string $dateCalcul): self
    {
        $this->initialized['dateCalcul'] = true;
        $this->dateCalcul = $dateCalcul;

        return $this;
    }

    /**
     * Erreur lors du calcul du score non financier de l'entreprise.
     */
    public function getErreur(): ?string
    {
        return $this->erreur;
    }

    /**
     * Erreur lors du calcul du score non financier de l'entreprise.
     */
    public function setErreur(?string $erreur): self
    {
        $this->initialized['erreur'] = true;
        $this->erreur = $erreur;

        return $this;
    }
}
