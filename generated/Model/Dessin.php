<?php

namespace Qdequippe\Pappers\Api\Model;

class Dessin extends \ArrayObject
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
     * Numéro de dépôt du dessin.
     *
     * @var string|null
     */
    protected $numero;
    /**
     * Liste des dépositaires du dessin.
     *
     * @var list<PersonneDessin>|null
     */
    protected $depositaires;
    /**
     * Liste des mandataires du dessin.
     *
     * @var list<PersonneDessin>|null
     */
    protected $mandataires;
    /**
     * Lien vers l'image du dessin.
     *
     * @var string|null
     */
    protected $lienImage;
    /**
     * Lieu d'enregistrement du dessin.
     *
     * @var string|null
     */
    protected $lieuEnregistrement;
    /**
     * Date d'enregistrement du dessin au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateEnregistrement;
    /**
     * Informations sur les designs du dessin.
     *
     * @var list<DessinDesignsItem>|null
     */
    protected $designs;

    /**
     * Numéro de dépôt du dessin.
     */
    public function getNumero(): ?string
    {
        return $this->numero;
    }

    /**
     * Numéro de dépôt du dessin.
     */
    public function setNumero(?string $numero): self
    {
        $this->initialized['numero'] = true;
        $this->numero = $numero;

        return $this;
    }

    /**
     * Liste des dépositaires du dessin.
     *
     * @return list<PersonneDessin>|null
     */
    public function getDepositaires(): ?array
    {
        return $this->depositaires;
    }

    /**
     * Liste des dépositaires du dessin.
     *
     * @param list<PersonneDessin>|null $depositaires
     */
    public function setDepositaires(?array $depositaires): self
    {
        $this->initialized['depositaires'] = true;
        $this->depositaires = $depositaires;

        return $this;
    }

    /**
     * Liste des mandataires du dessin.
     *
     * @return list<PersonneDessin>|null
     */
    public function getMandataires(): ?array
    {
        return $this->mandataires;
    }

    /**
     * Liste des mandataires du dessin.
     *
     * @param list<PersonneDessin>|null $mandataires
     */
    public function setMandataires(?array $mandataires): self
    {
        $this->initialized['mandataires'] = true;
        $this->mandataires = $mandataires;

        return $this;
    }

    /**
     * Lien vers l'image du dessin.
     */
    public function getLienImage(): ?string
    {
        return $this->lienImage;
    }

    /**
     * Lien vers l'image du dessin.
     */
    public function setLienImage(?string $lienImage): self
    {
        $this->initialized['lienImage'] = true;
        $this->lienImage = $lienImage;

        return $this;
    }

    /**
     * Lieu d'enregistrement du dessin.
     */
    public function getLieuEnregistrement(): ?string
    {
        return $this->lieuEnregistrement;
    }

    /**
     * Lieu d'enregistrement du dessin.
     */
    public function setLieuEnregistrement(?string $lieuEnregistrement): self
    {
        $this->initialized['lieuEnregistrement'] = true;
        $this->lieuEnregistrement = $lieuEnregistrement;

        return $this;
    }

    /**
     * Date d'enregistrement du dessin au format AAAA-MM-JJ.
     */
    public function getDateEnregistrement(): ?\DateTime
    {
        return $this->dateEnregistrement;
    }

    /**
     * Date d'enregistrement du dessin au format AAAA-MM-JJ.
     */
    public function setDateEnregistrement(?\DateTime $dateEnregistrement): self
    {
        $this->initialized['dateEnregistrement'] = true;
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Informations sur les designs du dessin.
     *
     * @return list<DessinDesignsItem>|null
     */
    public function getDesigns(): ?array
    {
        return $this->designs;
    }

    /**
     * Informations sur les designs du dessin.
     *
     * @param list<DessinDesignsItem>|null $designs
     */
    public function setDesigns(?array $designs): self
    {
        $this->initialized['designs'] = true;
        $this->designs = $designs;

        return $this;
    }
}
