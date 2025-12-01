<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntrepriseNouvelleDecisionJusticeItem extends \ArrayObject
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
     * Identifiant unique de la décision de justice.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Juridiction ayant rendu la décision.
     *
     * @var string|null
     */
    protected $juridiction;
    /**
     * Date de la décision au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * Numéro de la décision.
     *
     * @var string|null
     */
    protected $numero;
    /**
     * Date de début de l'affaire au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateDebutAffaire;
    /**
     * Position de l'entreprise dans l'affaire.
     *
     * @var string|null
     */
    protected $position;
    /**
     * Liste des avocats impliqués dans la décision.
     *
     * @var list<string>|null
     */
    protected $avocats;
    /**
     * Liste des autres parties impliquées dans la décision.
     *
     * @var list<string>|null
     */
    protected $autresParties;

    /**
     * Identifiant unique de la décision de justice.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Identifiant unique de la décision de justice.
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Juridiction ayant rendu la décision.
     */
    public function getJuridiction(): ?string
    {
        return $this->juridiction;
    }

    /**
     * Juridiction ayant rendu la décision.
     */
    public function setJuridiction(?string $juridiction): self
    {
        $this->initialized['juridiction'] = true;
        $this->juridiction = $juridiction;

        return $this;
    }

    /**
     * Date de la décision au format AAAA-MM-JJ.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Date de la décision au format AAAA-MM-JJ.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Numéro de la décision.
     */
    public function getNumero(): ?string
    {
        return $this->numero;
    }

    /**
     * Numéro de la décision.
     */
    public function setNumero(?string $numero): self
    {
        $this->initialized['numero'] = true;
        $this->numero = $numero;

        return $this;
    }

    /**
     * Date de début de l'affaire au format AAAA-MM-JJ.
     */
    public function getDateDebutAffaire(): ?\DateTime
    {
        return $this->dateDebutAffaire;
    }

    /**
     * Date de début de l'affaire au format AAAA-MM-JJ.
     */
    public function setDateDebutAffaire(?\DateTime $dateDebutAffaire): self
    {
        $this->initialized['dateDebutAffaire'] = true;
        $this->dateDebutAffaire = $dateDebutAffaire;

        return $this;
    }

    /**
     * Position de l'entreprise dans l'affaire.
     */
    public function getPosition(): ?string
    {
        return $this->position;
    }

    /**
     * Position de l'entreprise dans l'affaire.
     */
    public function setPosition(?string $position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    /**
     * Liste des avocats impliqués dans la décision.
     *
     * @return list<string>|null
     */
    public function getAvocats(): ?array
    {
        return $this->avocats;
    }

    /**
     * Liste des avocats impliqués dans la décision.
     *
     * @param list<string>|null $avocats
     */
    public function setAvocats(?array $avocats): self
    {
        $this->initialized['avocats'] = true;
        $this->avocats = $avocats;

        return $this;
    }

    /**
     * Liste des autres parties impliquées dans la décision.
     *
     * @return list<string>|null
     */
    public function getAutresParties(): ?array
    {
        return $this->autresParties;
    }

    /**
     * Liste des autres parties impliquées dans la décision.
     *
     * @param list<string>|null $autresParties
     */
    public function setAutresParties(?array $autresParties): self
    {
        $this->initialized['autresParties'] = true;
        $this->autresParties = $autresParties;

        return $this;
    }
}
