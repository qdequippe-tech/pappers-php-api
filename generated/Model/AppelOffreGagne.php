<?php

namespace Qdequippe\Pappers\Api\Model;

class AppelOffreGagne extends \ArrayObject
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
     * Montant de l'appel d'offre en euros.
     *
     * @var float|null
     */
    protected $montant;
    /**
     * Durée du marché en mois.
     *
     * @var int|null
     */
    protected $dureeMois;
    /**
     * Date de notification de l'appel d'offre au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateNotification;
    /**
     * Date de publication de l'appel d'offre au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $datePublication;
    /**
     * Objet de l'appel d'offre.
     *
     * @var string|null
     */
    protected $objet;
    /**
     * Code de la catégorie de l'appel d'offre.
     *
     * @var string|null
     */
    protected $codeCategorie;
    /**
     * Libellé de la catégorie de l'appel d'offre.
     *
     * @var string|null
     */
    protected $libelleCategorie;
    /**
     * Identifiant Macellum de l'appel d'offre.
     *
     * @var string|null
     */
    protected $idMacellum;
    /**
     * Statut de la procédure de l'appel d'offre.
     *
     * @var string|null
     */
    protected $statutProcedure;
    /**
     * @var AppelOffreEntreprise|null
     */
    protected $acheteur;
    /**
     * @var AppelOffreEntreprise|null
     */
    protected $titulaire;

    /**
     * Montant de l'appel d'offre en euros.
     */
    public function getMontant(): ?float
    {
        return $this->montant;
    }

    /**
     * Montant de l'appel d'offre en euros.
     */
    public function setMontant(?float $montant): self
    {
        $this->initialized['montant'] = true;
        $this->montant = $montant;

        return $this;
    }

    /**
     * Durée du marché en mois.
     */
    public function getDureeMois(): ?int
    {
        return $this->dureeMois;
    }

    /**
     * Durée du marché en mois.
     */
    public function setDureeMois(?int $dureeMois): self
    {
        $this->initialized['dureeMois'] = true;
        $this->dureeMois = $dureeMois;

        return $this;
    }

    /**
     * Date de notification de l'appel d'offre au format AAAA-MM-JJ.
     */
    public function getDateNotification(): ?\DateTime
    {
        return $this->dateNotification;
    }

    /**
     * Date de notification de l'appel d'offre au format AAAA-MM-JJ.
     */
    public function setDateNotification(?\DateTime $dateNotification): self
    {
        $this->initialized['dateNotification'] = true;
        $this->dateNotification = $dateNotification;

        return $this;
    }

    /**
     * Date de publication de l'appel d'offre au format AAAA-MM-JJ.
     */
    public function getDatePublication(): ?\DateTime
    {
        return $this->datePublication;
    }

    /**
     * Date de publication de l'appel d'offre au format AAAA-MM-JJ.
     */
    public function setDatePublication(?\DateTime $datePublication): self
    {
        $this->initialized['datePublication'] = true;
        $this->datePublication = $datePublication;

        return $this;
    }

    /**
     * Objet de l'appel d'offre.
     */
    public function getObjet(): ?string
    {
        return $this->objet;
    }

    /**
     * Objet de l'appel d'offre.
     */
    public function setObjet(?string $objet): self
    {
        $this->initialized['objet'] = true;
        $this->objet = $objet;

        return $this;
    }

    /**
     * Code de la catégorie de l'appel d'offre.
     */
    public function getCodeCategorie(): ?string
    {
        return $this->codeCategorie;
    }

    /**
     * Code de la catégorie de l'appel d'offre.
     */
    public function setCodeCategorie(?string $codeCategorie): self
    {
        $this->initialized['codeCategorie'] = true;
        $this->codeCategorie = $codeCategorie;

        return $this;
    }

    /**
     * Libellé de la catégorie de l'appel d'offre.
     */
    public function getLibelleCategorie(): ?string
    {
        return $this->libelleCategorie;
    }

    /**
     * Libellé de la catégorie de l'appel d'offre.
     */
    public function setLibelleCategorie(?string $libelleCategorie): self
    {
        $this->initialized['libelleCategorie'] = true;
        $this->libelleCategorie = $libelleCategorie;

        return $this;
    }

    /**
     * Identifiant Macellum de l'appel d'offre.
     */
    public function getIdMacellum(): ?string
    {
        return $this->idMacellum;
    }

    /**
     * Identifiant Macellum de l'appel d'offre.
     */
    public function setIdMacellum(?string $idMacellum): self
    {
        $this->initialized['idMacellum'] = true;
        $this->idMacellum = $idMacellum;

        return $this;
    }

    /**
     * Statut de la procédure de l'appel d'offre.
     */
    public function getStatutProcedure(): ?string
    {
        return $this->statutProcedure;
    }

    /**
     * Statut de la procédure de l'appel d'offre.
     */
    public function setStatutProcedure(?string $statutProcedure): self
    {
        $this->initialized['statutProcedure'] = true;
        $this->statutProcedure = $statutProcedure;

        return $this;
    }

    public function getAcheteur(): ?AppelOffreEntreprise
    {
        return $this->acheteur;
    }

    public function setAcheteur(?AppelOffreEntreprise $acheteur): self
    {
        $this->initialized['acheteur'] = true;
        $this->acheteur = $acheteur;

        return $this;
    }

    public function getTitulaire(): ?AppelOffreEntreprise
    {
        return $this->titulaire;
    }

    public function setTitulaire(?AppelOffreEntreprise $titulaire): self
    {
        $this->initialized['titulaire'] = true;
        $this->titulaire = $titulaire;

        return $this;
    }
}
