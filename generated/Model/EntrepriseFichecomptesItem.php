<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichecomptesItem extends \ArrayObject
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
     * Date de dépôt des comptes.
     *
     * @var \DateTime|null
     */
    protected $dateDepot;
    /**
     * Date de dépôt formatée des comptes.
     *
     * @var string|null
     */
    protected $dateDepotFormate;
    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateCloture;
    /**
     * Année de clôture des comptes.
     *
     * @var int|null
     */
    protected $anneeCloture;
    /**
     * Type de comptes (Comptes Sociaux ou Comptes Consolidés).
     *
     * @var string|null
     */
    protected $typeComptes;
    /**
     * Confidentialité totale des comptes.
     *
     * @var bool|null
     */
    protected $confidentialite;
    /**
     * Confidentialité partielle des comptes (seul le compte de résultat est confidentiel, le reste des comptes sont disponibles).
     *
     * @var bool|null
     */
    protected $confidentialiteCompteDeResultat;
    /**
     * Disponibilité des comptes au format PDF.
     *
     * @var bool|null
     */
    protected $disponible;
    /**
     * Nom du fichier PDF des comptes.
     *
     * @var string|null
     */
    protected $nomFichierPdf;
    /**
     * Token des comptes.
     *
     * @var string|null
     */
    protected $token;
    /**
     * Disponibilité des comptes au format XLSX.
     *
     * @var bool|null
     */
    protected $disponibleXlsx;
    /**
     * Nom du fichier XLSX des comptes.
     *
     * @var string|null
     */
    protected $nomFichierXlsx;
    /**
     * Token des comptes XLSX.
     *
     * @var string|null
     */
    protected $tokenXlsx;

    /**
     * Date de dépôt des comptes.
     */
    public function getDateDepot(): ?\DateTime
    {
        return $this->dateDepot;
    }

    /**
     * Date de dépôt des comptes.
     */
    public function setDateDepot(?\DateTime $dateDepot): self
    {
        $this->initialized['dateDepot'] = true;
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Date de dépôt formatée des comptes.
     */
    public function getDateDepotFormate(): ?string
    {
        return $this->dateDepotFormate;
    }

    /**
     * Date de dépôt formatée des comptes.
     */
    public function setDateDepotFormate(?string $dateDepotFormate): self
    {
        $this->initialized['dateDepotFormate'] = true;
        $this->dateDepotFormate = $dateDepotFormate;

        return $this;
    }

    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     */
    public function getDateCloture(): ?\DateTime
    {
        return $this->dateCloture;
    }

    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     */
    public function setDateCloture(?\DateTime $dateCloture): self
    {
        $this->initialized['dateCloture'] = true;
        $this->dateCloture = $dateCloture;

        return $this;
    }

    /**
     * Année de clôture des comptes.
     */
    public function getAnneeCloture(): ?int
    {
        return $this->anneeCloture;
    }

    /**
     * Année de clôture des comptes.
     */
    public function setAnneeCloture(?int $anneeCloture): self
    {
        $this->initialized['anneeCloture'] = true;
        $this->anneeCloture = $anneeCloture;

        return $this;
    }

    /**
     * Type de comptes (Comptes Sociaux ou Comptes Consolidés).
     */
    public function getTypeComptes(): ?string
    {
        return $this->typeComptes;
    }

    /**
     * Type de comptes (Comptes Sociaux ou Comptes Consolidés).
     */
    public function setTypeComptes(?string $typeComptes): self
    {
        $this->initialized['typeComptes'] = true;
        $this->typeComptes = $typeComptes;

        return $this;
    }

    /**
     * Confidentialité totale des comptes.
     */
    public function getConfidentialite(): ?bool
    {
        return $this->confidentialite;
    }

    /**
     * Confidentialité totale des comptes.
     */
    public function setConfidentialite(?bool $confidentialite): self
    {
        $this->initialized['confidentialite'] = true;
        $this->confidentialite = $confidentialite;

        return $this;
    }

    /**
     * Confidentialité partielle des comptes (seul le compte de résultat est confidentiel, le reste des comptes sont disponibles).
     */
    public function getConfidentialiteCompteDeResultat(): ?bool
    {
        return $this->confidentialiteCompteDeResultat;
    }

    /**
     * Confidentialité partielle des comptes (seul le compte de résultat est confidentiel, le reste des comptes sont disponibles).
     */
    public function setConfidentialiteCompteDeResultat(?bool $confidentialiteCompteDeResultat): self
    {
        $this->initialized['confidentialiteCompteDeResultat'] = true;
        $this->confidentialiteCompteDeResultat = $confidentialiteCompteDeResultat;

        return $this;
    }

    /**
     * Disponibilité des comptes au format PDF.
     */
    public function getDisponible(): ?bool
    {
        return $this->disponible;
    }

    /**
     * Disponibilité des comptes au format PDF.
     */
    public function setDisponible(?bool $disponible): self
    {
        $this->initialized['disponible'] = true;
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Nom du fichier PDF des comptes.
     */
    public function getNomFichierPdf(): ?string
    {
        return $this->nomFichierPdf;
    }

    /**
     * Nom du fichier PDF des comptes.
     */
    public function setNomFichierPdf(?string $nomFichierPdf): self
    {
        $this->initialized['nomFichierPdf'] = true;
        $this->nomFichierPdf = $nomFichierPdf;

        return $this;
    }

    /**
     * Token des comptes.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Token des comptes.
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    /**
     * Disponibilité des comptes au format XLSX.
     */
    public function getDisponibleXlsx(): ?bool
    {
        return $this->disponibleXlsx;
    }

    /**
     * Disponibilité des comptes au format XLSX.
     */
    public function setDisponibleXlsx(?bool $disponibleXlsx): self
    {
        $this->initialized['disponibleXlsx'] = true;
        $this->disponibleXlsx = $disponibleXlsx;

        return $this;
    }

    /**
     * Nom du fichier XLSX des comptes.
     */
    public function getNomFichierXlsx(): ?string
    {
        return $this->nomFichierXlsx;
    }

    /**
     * Nom du fichier XLSX des comptes.
     */
    public function setNomFichierXlsx(?string $nomFichierXlsx): self
    {
        $this->initialized['nomFichierXlsx'] = true;
        $this->nomFichierXlsx = $nomFichierXlsx;

        return $this;
    }

    /**
     * Token des comptes XLSX.
     */
    public function getTokenXlsx(): ?string
    {
        return $this->tokenXlsx;
    }

    /**
     * Token des comptes XLSX.
     */
    public function setTokenXlsx(?string $tokenXlsx): self
    {
        $this->initialized['tokenXlsx'] = true;
        $this->tokenXlsx = $tokenXlsx;

        return $this;
    }
}
