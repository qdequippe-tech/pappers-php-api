<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class Bodacc extends \ArrayObject
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
     * Numéro de parution de la publication.
     *
     * @var string
     */
    protected $numeroParution;
    /**
     * Date de la publication, au format AAAA-MM-JJ.
     *
     * @var string
     */
    protected $date;
    /**
     * Numéro d'annonce de la publication.
     *
     * @var string
     */
    protected $numeroAnnonce;
    /**
     * Bodacc de la publication (A, B ou C).
     *
     * @var string
     */
    protected $bodacc;
    /**
     * Type de la publication parmi la liste suivante : Création, Immatriculation, Modification, Vente, Achat, Radiation, Procédure collective, Dépôt des comptes.
     *
     * @var string
     */
    protected $type;
    /**
     * Greffe de publication.
     *
     * @var string
     */
    protected $greffe;

    /**
     * Numéro de parution de la publication.
     */
    public function getNumeroParution(): string
    {
        return $this->numeroParution;
    }

    /**
     * Numéro de parution de la publication.
     */
    public function setNumeroParution(string $numeroParution)
    {
        $this->initialized['numeroParution'] = true;
        $this->numeroParution = $numeroParution;
    }

    /**
     * Date de la publication, au format AAAA-MM-JJ.
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Date de la publication, au format AAAA-MM-JJ.
     */
    public function setDate(string $date)
    {
        $this->initialized['date'] = true;
        $this->date = $date;
    }

    /**
     * Numéro d'annonce de la publication.
     */
    public function getNumeroAnnonce(): string
    {
        return $this->numeroAnnonce;
    }

    /**
     * Numéro d'annonce de la publication.
     */
    public function setNumeroAnnonce(string $numeroAnnonce)
    {
        $this->initialized['numeroAnnonce'] = true;
        $this->numeroAnnonce = $numeroAnnonce;
    }

    /**
     * Bodacc de la publication (A, B ou C).
     */
    public function getBodacc(): string
    {
        return $this->bodacc;
    }

    /**
     * Bodacc de la publication (A, B ou C).
     */
    public function setBodacc(string $bodacc)
    {
        $this->initialized['bodacc'] = true;
        $this->bodacc = $bodacc;
    }

    /**
     * Type de la publication parmi la liste suivante : Création, Immatriculation, Modification, Vente, Achat, Radiation, Procédure collective, Dépôt des comptes.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type de la publication parmi la liste suivante : Création, Immatriculation, Modification, Vente, Achat, Radiation, Procédure collective, Dépôt des comptes.
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }

    /**
     * Greffe de publication.
     */
    public function getGreffe(): string
    {
        return $this->greffe;
    }

    /**
     * Greffe de publication.
     */
    public function setGreffe(string $greffe)
    {
        $this->initialized['greffe'] = true;
        $this->greffe = $greffe;
    }
}
