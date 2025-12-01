<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheentreprisesDirigeesItem extends \ArrayObject
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
     * SIREN de l'entreprise dirigée.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Statut de l'entreprise dirigée.
     *
     * @var string|null
     */
    protected $statut;
    /**
     * Qualités exercées par l'entreprise dans l'entreprise dirigée.
     *
     * @var list<string>|null
     */
    protected $qualites;
    /**
     * Date de prise de poste dans l'entreprise dirigée, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $datePriseDePoste;
    /**
     * Date de départ de poste dans l'entreprise dirigée, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateDepartDePoste;
    /**
     * Dénomination sociale de l'entreprise dirigée.
     *
     * @var string|null
     */
    protected $denomination;

    /**
     * SIREN de l'entreprise dirigée.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de l'entreprise dirigée.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Statut de l'entreprise dirigée.
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * Statut de l'entreprise dirigée.
     */
    public function setStatut(?string $statut): self
    {
        $this->initialized['statut'] = true;
        $this->statut = $statut;

        return $this;
    }

    /**
     * Qualités exercées par l'entreprise dans l'entreprise dirigée.
     *
     * @return list<string>|null
     */
    public function getQualites(): ?array
    {
        return $this->qualites;
    }

    /**
     * Qualités exercées par l'entreprise dans l'entreprise dirigée.
     *
     * @param list<string>|null $qualites
     */
    public function setQualites(?array $qualites): self
    {
        $this->initialized['qualites'] = true;
        $this->qualites = $qualites;

        return $this;
    }

    /**
     * Date de prise de poste dans l'entreprise dirigée, au format AAAA-MM-JJ.
     */
    public function getDatePriseDePoste(): ?\DateTime
    {
        return $this->datePriseDePoste;
    }

    /**
     * Date de prise de poste dans l'entreprise dirigée, au format AAAA-MM-JJ.
     */
    public function setDatePriseDePoste(?\DateTime $datePriseDePoste): self
    {
        $this->initialized['datePriseDePoste'] = true;
        $this->datePriseDePoste = $datePriseDePoste;

        return $this;
    }

    /**
     * Date de départ de poste dans l'entreprise dirigée, au format AAAA-MM-JJ.
     */
    public function getDateDepartDePoste(): ?\DateTime
    {
        return $this->dateDepartDePoste;
    }

    /**
     * Date de départ de poste dans l'entreprise dirigée, au format AAAA-MM-JJ.
     */
    public function setDateDepartDePoste(?\DateTime $dateDepartDePoste): self
    {
        $this->initialized['dateDepartDePoste'] = true;
        $this->dateDepartDePoste = $dateDepartDePoste;

        return $this;
    }

    /**
     * Dénomination sociale de l'entreprise dirigée.
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination sociale de l'entreprise dirigée.
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }
}
