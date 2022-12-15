<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichemarquesItemEvenementsItem extends \ArrayObject
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
     * Type d'événement.
     *
     * @var string
     */
    protected $type;
    /**
     * Identifiant de l'événement.
     *
     * @var string
     */
    protected $identifiantEvenement;
    /**
     * Référence de l'événement.
     *
     * @var string
     */
    protected $reference;
    /**
     * Date de l'événement, au format AAAA-MM-JJ.
     *
     * @var string
     */
    protected $date;
    /**
     * Numéro du BOPI dans lequel l'événement a été publié.
     *
     * @var string
     */
    protected $numeroBopi;
    /**
     * Date de publication du BOPI au format AAAA-MM-JJ.
     *
     * @var string
     */
    protected $dateBopi;
    /**
     * Bénéficiaire associé à l'événement.
     *
     * @var string
     */
    protected $beneficiaire;

    /**
     * Type d'événement.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type d'événement.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Identifiant de l'événement.
     */
    public function getIdentifiantEvenement(): string
    {
        return $this->identifiantEvenement;
    }

    /**
     * Identifiant de l'événement.
     */
    public function setIdentifiantEvenement(string $identifiantEvenement): self
    {
        $this->initialized['identifiantEvenement'] = true;
        $this->identifiantEvenement = $identifiantEvenement;

        return $this;
    }

    /**
     * Référence de l'événement.
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * Référence de l'événement.
     */
    public function setReference(string $reference): self
    {
        $this->initialized['reference'] = true;
        $this->reference = $reference;

        return $this;
    }

    /**
     * Date de l'événement, au format AAAA-MM-JJ.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Date de l'événement, au format AAAA-MM-JJ.
     */
    public function setDate(string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Numéro du BOPI dans lequel l'événement a été publié.
     */
    public function getNumeroBopi(): string
    {
        return $this->numeroBopi;
    }

    /**
     * Numéro du BOPI dans lequel l'événement a été publié.
     */
    public function setNumeroBopi(string $numeroBopi): self
    {
        $this->initialized['numeroBopi'] = true;
        $this->numeroBopi = $numeroBopi;

        return $this;
    }

    /**
     * Date de publication du BOPI au format AAAA-MM-JJ.
     */
    public function getDateBopi(): string
    {
        return $this->dateBopi;
    }

    /**
     * Date de publication du BOPI au format AAAA-MM-JJ.
     */
    public function setDateBopi(string $dateBopi): self
    {
        $this->initialized['dateBopi'] = true;
        $this->dateBopi = $dateBopi;

        return $this;
    }

    /**
     * Bénéficiaire associé à l'événement.
     */
    public function getBeneficiaire(): string
    {
        return $this->beneficiaire;
    }

    /**
     * Bénéficiaire associé à l'événement.
     */
    public function setBeneficiaire(string $beneficiaire): self
    {
        $this->initialized['beneficiaire'] = true;
        $this->beneficiaire = $beneficiaire;

        return $this;
    }
}
