<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichefinancesItem extends \ArrayObject
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
     * Année de cloture d'exercice.
     *
     * @var int|null
     */
    protected $annee;
    /**
     * Date de cloture de l'exercice des finances de l'entreprise.
     *
     * @var \DateTime|null
     */
    protected $dateDeClotureExercice;
    /**
     * Durée de l'exercice de l'entreprise.".
     *
     * @var int|null
     */
    protected $dureeExercice;
    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @var float|null
     */
    protected $chiffreAffaires;
    /**
     * Résultat de l'entreprise.
     *
     * @var float|null
     */
    protected $resultat;
    /**
     * Effectif de l'entreprise.
     *
     * @var int|null
     */
    protected $effectif;
    /**
     * Marge brute de l'entreprise.
     *
     * @var float|null
     */
    protected $margeBrute;
    /**
     * Excédent brut d'exploitation (EBITDA) de l'entreprise.
     *
     * @var float|null
     */
    protected $excedentBrutExploitation;
    /**
     * Résultat d'exploitation (EBIT) de l'entreprise.
     *
     * @var float|null
     */
    protected $resultatExploitation;
    /**
     * Taux de croissance du chiffre d'affaires (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $tauxCroissanceChiffreAffaires;
    /**
     * Taux de marge brute (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $tauxMargeBrute;
    /**
     * Taux de marge d'EBITDA (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $tauxMargeEBITDA;
    /**
     * Taux de marge opérationnelle (EBIT) (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $tauxMargeOperationnelle;
    /**
     * BFR (Besoin en fonds de roulement) de l'entreprise.
     *
     * @var float|null
     */
    protected $bFR;
    /**
     * BFR exploitation de l'entreprise.
     *
     * @var float|null
     */
    protected $bFRExploitation;
    /**
     * BFR hors exploitation de l'entreprise.
     *
     * @var float|null
     */
    protected $bFRHorsExploitation;
    /**
     * BFR (en jours de CA) de l'entreprise.
     *
     * @var float|null
     */
    protected $bFRJoursCA;
    /**
     * BFR exploitation (en jours de CA) de l'entreprise.
     *
     * @var float|null
     */
    protected $bFRExploitationJoursCA;
    /**
     * BFR hors exploitation (en jours de CA) de l'entreprise.
     *
     * @var float|null
     */
    protected $bFRHorsExploitationJoursCA;
    /**
     * Délai de paiement clients (en jours) de l'entreprise.
     *
     * @var float|null
     */
    protected $delaiPaiementClientsJours;
    /**
     * Délai de paiement fournisseurs (en jours) de l'entreprise.
     *
     * @var float|null
     */
    protected $delaiPaiementFournisseursJours;
    /**
     * Ratio des stocks / CA (en jours) de l'entreprise.
     *
     * @var float|null
     */
    protected $ratioStockCAJours;
    /**
     * Capacité d'autofinancement de l'entreprise.
     *
     * @var float|null
     */
    protected $capaciteAutofinancement;
    /**
     * Capacité d'autofinancement / CA (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $capaciteAutofinancementCA;
    /**
     * Fonds de roulement net global de l'entreprise.
     *
     * @var float|null
     */
    protected $fondsRoulementNetGlobal;
    /**
     * Couverture du BFR de l'entreprise.
     *
     * @var float|null
     */
    protected $couvertureBFR;
    /**
     * Trésorerie de l'entreprise.
     *
     * @var float|null
     */
    protected $tresorerie;
    /**
     * Dettes financières de l'entreprise.
     *
     * @var float|null
     */
    protected $dettesFinancieres;
    /**
     * Capacité de remboursement de l'entreprise.
     *
     * @var float|null
     */
    protected $capaciteRemboursement;
    /**
     * Ratio d'endettement (Gearing) de l'entreprise.
     *
     * @var float|null
     */
    protected $ratioEndettement;
    /**
     * Autonomie financière (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $autonomieFinanciere;
    /**
     * Taux de levier (DFN/EBITDA) de l'entreprise.
     *
     * @var float|null
     */
    protected $tauxLevier;
    /**
     * Etat des dettes à 1 an au plus de l'entreprise.
     *
     * @var float|null
     */
    protected $etatDettes1AnAuPlus;
    /**
     * Liquidité générale de l'entreprise.
     *
     * @var float|null
     */
    protected $liquiditeGenerale;
    /**
     * Couverture des dettes de l'entreprise.
     *
     * @var float|null
     */
    protected $couvertureDettes;
    /**
     * Marge nette (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $margeNette;
    /**
     * Rentabilité sur fonds propres (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $rentabiliteFondsPropres;
    /**
     * Rentabilité économique (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $rentabiliteEconomique;
    /**
     * Valeur ajoutée de l'entreprise.
     *
     * @var float|null
     */
    protected $valeurAjoutee;
    /**
     * Valeur ajoutée / CA (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $valeurAjouteeCA;
    /**
     * Salaires et charges sociales de l'entreprise.
     *
     * @var float|null
     */
    protected $salairesChargesSociales;
    /**
     * Salaires / CA (en %) de l'entreprise.
     *
     * @var float|null
     */
    protected $salairesCA;
    /**
     * Impôts et taxes de l'entreprise.
     *
     * @var float|null
     */
    protected $impotsTaxes;

    /**
     * Année de cloture d'exercice.
     */
    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    /**
     * Année de cloture d'exercice.
     */
    public function setAnnee(?int $annee): self
    {
        $this->initialized['annee'] = true;
        $this->annee = $annee;

        return $this;
    }

    /**
     * Date de cloture de l'exercice des finances de l'entreprise.
     */
    public function getDateDeClotureExercice(): ?\DateTime
    {
        return $this->dateDeClotureExercice;
    }

    /**
     * Date de cloture de l'exercice des finances de l'entreprise.
     */
    public function setDateDeClotureExercice(?\DateTime $dateDeClotureExercice): self
    {
        $this->initialized['dateDeClotureExercice'] = true;
        $this->dateDeClotureExercice = $dateDeClotureExercice;

        return $this;
    }

    /**
     * Durée de l'exercice de l'entreprise.".
     */
    public function getDureeExercice(): ?int
    {
        return $this->dureeExercice;
    }

    /**
     * Durée de l'exercice de l'entreprise.".
     */
    public function setDureeExercice(?int $dureeExercice): self
    {
        $this->initialized['dureeExercice'] = true;
        $this->dureeExercice = $dureeExercice;

        return $this;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     */
    public function getChiffreAffaires(): ?float
    {
        return $this->chiffreAffaires;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     */
    public function setChiffreAffaires(?float $chiffreAffaires): self
    {
        $this->initialized['chiffreAffaires'] = true;
        $this->chiffreAffaires = $chiffreAffaires;

        return $this;
    }

    /**
     * Résultat de l'entreprise.
     */
    public function getResultat(): ?float
    {
        return $this->resultat;
    }

    /**
     * Résultat de l'entreprise.
     */
    public function setResultat(?float $resultat): self
    {
        $this->initialized['resultat'] = true;
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Effectif de l'entreprise.
     */
    public function getEffectif(): ?int
    {
        return $this->effectif;
    }

    /**
     * Effectif de l'entreprise.
     */
    public function setEffectif(?int $effectif): self
    {
        $this->initialized['effectif'] = true;
        $this->effectif = $effectif;

        return $this;
    }

    /**
     * Marge brute de l'entreprise.
     */
    public function getMargeBrute(): ?float
    {
        return $this->margeBrute;
    }

    /**
     * Marge brute de l'entreprise.
     */
    public function setMargeBrute(?float $margeBrute): self
    {
        $this->initialized['margeBrute'] = true;
        $this->margeBrute = $margeBrute;

        return $this;
    }

    /**
     * Excédent brut d'exploitation (EBITDA) de l'entreprise.
     */
    public function getExcedentBrutExploitation(): ?float
    {
        return $this->excedentBrutExploitation;
    }

    /**
     * Excédent brut d'exploitation (EBITDA) de l'entreprise.
     */
    public function setExcedentBrutExploitation(?float $excedentBrutExploitation): self
    {
        $this->initialized['excedentBrutExploitation'] = true;
        $this->excedentBrutExploitation = $excedentBrutExploitation;

        return $this;
    }

    /**
     * Résultat d'exploitation (EBIT) de l'entreprise.
     */
    public function getResultatExploitation(): ?float
    {
        return $this->resultatExploitation;
    }

    /**
     * Résultat d'exploitation (EBIT) de l'entreprise.
     */
    public function setResultatExploitation(?float $resultatExploitation): self
    {
        $this->initialized['resultatExploitation'] = true;
        $this->resultatExploitation = $resultatExploitation;

        return $this;
    }

    /**
     * Taux de croissance du chiffre d'affaires (en %) de l'entreprise.
     */
    public function getTauxCroissanceChiffreAffaires(): ?float
    {
        return $this->tauxCroissanceChiffreAffaires;
    }

    /**
     * Taux de croissance du chiffre d'affaires (en %) de l'entreprise.
     */
    public function setTauxCroissanceChiffreAffaires(?float $tauxCroissanceChiffreAffaires): self
    {
        $this->initialized['tauxCroissanceChiffreAffaires'] = true;
        $this->tauxCroissanceChiffreAffaires = $tauxCroissanceChiffreAffaires;

        return $this;
    }

    /**
     * Taux de marge brute (en %) de l'entreprise.
     */
    public function getTauxMargeBrute(): ?float
    {
        return $this->tauxMargeBrute;
    }

    /**
     * Taux de marge brute (en %) de l'entreprise.
     */
    public function setTauxMargeBrute(?float $tauxMargeBrute): self
    {
        $this->initialized['tauxMargeBrute'] = true;
        $this->tauxMargeBrute = $tauxMargeBrute;

        return $this;
    }

    /**
     * Taux de marge d'EBITDA (en %) de l'entreprise.
     */
    public function getTauxMargeEBITDA(): ?float
    {
        return $this->tauxMargeEBITDA;
    }

    /**
     * Taux de marge d'EBITDA (en %) de l'entreprise.
     */
    public function setTauxMargeEBITDA(?float $tauxMargeEBITDA): self
    {
        $this->initialized['tauxMargeEBITDA'] = true;
        $this->tauxMargeEBITDA = $tauxMargeEBITDA;

        return $this;
    }

    /**
     * Taux de marge opérationnelle (EBIT) (en %) de l'entreprise.
     */
    public function getTauxMargeOperationnelle(): ?float
    {
        return $this->tauxMargeOperationnelle;
    }

    /**
     * Taux de marge opérationnelle (EBIT) (en %) de l'entreprise.
     */
    public function setTauxMargeOperationnelle(?float $tauxMargeOperationnelle): self
    {
        $this->initialized['tauxMargeOperationnelle'] = true;
        $this->tauxMargeOperationnelle = $tauxMargeOperationnelle;

        return $this;
    }

    /**
     * BFR (Besoin en fonds de roulement) de l'entreprise.
     */
    public function getBFR(): ?float
    {
        return $this->bFR;
    }

    /**
     * BFR (Besoin en fonds de roulement) de l'entreprise.
     */
    public function setBFR(?float $bFR): self
    {
        $this->initialized['bFR'] = true;
        $this->bFR = $bFR;

        return $this;
    }

    /**
     * BFR exploitation de l'entreprise.
     */
    public function getBFRExploitation(): ?float
    {
        return $this->bFRExploitation;
    }

    /**
     * BFR exploitation de l'entreprise.
     */
    public function setBFRExploitation(?float $bFRExploitation): self
    {
        $this->initialized['bFRExploitation'] = true;
        $this->bFRExploitation = $bFRExploitation;

        return $this;
    }

    /**
     * BFR hors exploitation de l'entreprise.
     */
    public function getBFRHorsExploitation(): ?float
    {
        return $this->bFRHorsExploitation;
    }

    /**
     * BFR hors exploitation de l'entreprise.
     */
    public function setBFRHorsExploitation(?float $bFRHorsExploitation): self
    {
        $this->initialized['bFRHorsExploitation'] = true;
        $this->bFRHorsExploitation = $bFRHorsExploitation;

        return $this;
    }

    /**
     * BFR (en jours de CA) de l'entreprise.
     */
    public function getBFRJoursCA(): ?float
    {
        return $this->bFRJoursCA;
    }

    /**
     * BFR (en jours de CA) de l'entreprise.
     */
    public function setBFRJoursCA(?float $bFRJoursCA): self
    {
        $this->initialized['bFRJoursCA'] = true;
        $this->bFRJoursCA = $bFRJoursCA;

        return $this;
    }

    /**
     * BFR exploitation (en jours de CA) de l'entreprise.
     */
    public function getBFRExploitationJoursCA(): ?float
    {
        return $this->bFRExploitationJoursCA;
    }

    /**
     * BFR exploitation (en jours de CA) de l'entreprise.
     */
    public function setBFRExploitationJoursCA(?float $bFRExploitationJoursCA): self
    {
        $this->initialized['bFRExploitationJoursCA'] = true;
        $this->bFRExploitationJoursCA = $bFRExploitationJoursCA;

        return $this;
    }

    /**
     * BFR hors exploitation (en jours de CA) de l'entreprise.
     */
    public function getBFRHorsExploitationJoursCA(): ?float
    {
        return $this->bFRHorsExploitationJoursCA;
    }

    /**
     * BFR hors exploitation (en jours de CA) de l'entreprise.
     */
    public function setBFRHorsExploitationJoursCA(?float $bFRHorsExploitationJoursCA): self
    {
        $this->initialized['bFRHorsExploitationJoursCA'] = true;
        $this->bFRHorsExploitationJoursCA = $bFRHorsExploitationJoursCA;

        return $this;
    }

    /**
     * Délai de paiement clients (en jours) de l'entreprise.
     */
    public function getDelaiPaiementClientsJours(): ?float
    {
        return $this->delaiPaiementClientsJours;
    }

    /**
     * Délai de paiement clients (en jours) de l'entreprise.
     */
    public function setDelaiPaiementClientsJours(?float $delaiPaiementClientsJours): self
    {
        $this->initialized['delaiPaiementClientsJours'] = true;
        $this->delaiPaiementClientsJours = $delaiPaiementClientsJours;

        return $this;
    }

    /**
     * Délai de paiement fournisseurs (en jours) de l'entreprise.
     */
    public function getDelaiPaiementFournisseursJours(): ?float
    {
        return $this->delaiPaiementFournisseursJours;
    }

    /**
     * Délai de paiement fournisseurs (en jours) de l'entreprise.
     */
    public function setDelaiPaiementFournisseursJours(?float $delaiPaiementFournisseursJours): self
    {
        $this->initialized['delaiPaiementFournisseursJours'] = true;
        $this->delaiPaiementFournisseursJours = $delaiPaiementFournisseursJours;

        return $this;
    }

    /**
     * Ratio des stocks / CA (en jours) de l'entreprise.
     */
    public function getRatioStockCAJours(): ?float
    {
        return $this->ratioStockCAJours;
    }

    /**
     * Ratio des stocks / CA (en jours) de l'entreprise.
     */
    public function setRatioStockCAJours(?float $ratioStockCAJours): self
    {
        $this->initialized['ratioStockCAJours'] = true;
        $this->ratioStockCAJours = $ratioStockCAJours;

        return $this;
    }

    /**
     * Capacité d'autofinancement de l'entreprise.
     */
    public function getCapaciteAutofinancement(): ?float
    {
        return $this->capaciteAutofinancement;
    }

    /**
     * Capacité d'autofinancement de l'entreprise.
     */
    public function setCapaciteAutofinancement(?float $capaciteAutofinancement): self
    {
        $this->initialized['capaciteAutofinancement'] = true;
        $this->capaciteAutofinancement = $capaciteAutofinancement;

        return $this;
    }

    /**
     * Capacité d'autofinancement / CA (en %) de l'entreprise.
     */
    public function getCapaciteAutofinancementCA(): ?float
    {
        return $this->capaciteAutofinancementCA;
    }

    /**
     * Capacité d'autofinancement / CA (en %) de l'entreprise.
     */
    public function setCapaciteAutofinancementCA(?float $capaciteAutofinancementCA): self
    {
        $this->initialized['capaciteAutofinancementCA'] = true;
        $this->capaciteAutofinancementCA = $capaciteAutofinancementCA;

        return $this;
    }

    /**
     * Fonds de roulement net global de l'entreprise.
     */
    public function getFondsRoulementNetGlobal(): ?float
    {
        return $this->fondsRoulementNetGlobal;
    }

    /**
     * Fonds de roulement net global de l'entreprise.
     */
    public function setFondsRoulementNetGlobal(?float $fondsRoulementNetGlobal): self
    {
        $this->initialized['fondsRoulementNetGlobal'] = true;
        $this->fondsRoulementNetGlobal = $fondsRoulementNetGlobal;

        return $this;
    }

    /**
     * Couverture du BFR de l'entreprise.
     */
    public function getCouvertureBFR(): ?float
    {
        return $this->couvertureBFR;
    }

    /**
     * Couverture du BFR de l'entreprise.
     */
    public function setCouvertureBFR(?float $couvertureBFR): self
    {
        $this->initialized['couvertureBFR'] = true;
        $this->couvertureBFR = $couvertureBFR;

        return $this;
    }

    /**
     * Trésorerie de l'entreprise.
     */
    public function getTresorerie(): ?float
    {
        return $this->tresorerie;
    }

    /**
     * Trésorerie de l'entreprise.
     */
    public function setTresorerie(?float $tresorerie): self
    {
        $this->initialized['tresorerie'] = true;
        $this->tresorerie = $tresorerie;

        return $this;
    }

    /**
     * Dettes financières de l'entreprise.
     */
    public function getDettesFinancieres(): ?float
    {
        return $this->dettesFinancieres;
    }

    /**
     * Dettes financières de l'entreprise.
     */
    public function setDettesFinancieres(?float $dettesFinancieres): self
    {
        $this->initialized['dettesFinancieres'] = true;
        $this->dettesFinancieres = $dettesFinancieres;

        return $this;
    }

    /**
     * Capacité de remboursement de l'entreprise.
     */
    public function getCapaciteRemboursement(): ?float
    {
        return $this->capaciteRemboursement;
    }

    /**
     * Capacité de remboursement de l'entreprise.
     */
    public function setCapaciteRemboursement(?float $capaciteRemboursement): self
    {
        $this->initialized['capaciteRemboursement'] = true;
        $this->capaciteRemboursement = $capaciteRemboursement;

        return $this;
    }

    /**
     * Ratio d'endettement (Gearing) de l'entreprise.
     */
    public function getRatioEndettement(): ?float
    {
        return $this->ratioEndettement;
    }

    /**
     * Ratio d'endettement (Gearing) de l'entreprise.
     */
    public function setRatioEndettement(?float $ratioEndettement): self
    {
        $this->initialized['ratioEndettement'] = true;
        $this->ratioEndettement = $ratioEndettement;

        return $this;
    }

    /**
     * Autonomie financière (en %) de l'entreprise.
     */
    public function getAutonomieFinanciere(): ?float
    {
        return $this->autonomieFinanciere;
    }

    /**
     * Autonomie financière (en %) de l'entreprise.
     */
    public function setAutonomieFinanciere(?float $autonomieFinanciere): self
    {
        $this->initialized['autonomieFinanciere'] = true;
        $this->autonomieFinanciere = $autonomieFinanciere;

        return $this;
    }

    /**
     * Taux de levier (DFN/EBITDA) de l'entreprise.
     */
    public function getTauxLevier(): ?float
    {
        return $this->tauxLevier;
    }

    /**
     * Taux de levier (DFN/EBITDA) de l'entreprise.
     */
    public function setTauxLevier(?float $tauxLevier): self
    {
        $this->initialized['tauxLevier'] = true;
        $this->tauxLevier = $tauxLevier;

        return $this;
    }

    /**
     * Etat des dettes à 1 an au plus de l'entreprise.
     */
    public function getEtatDettes1AnAuPlus(): ?float
    {
        return $this->etatDettes1AnAuPlus;
    }

    /**
     * Etat des dettes à 1 an au plus de l'entreprise.
     */
    public function setEtatDettes1AnAuPlus(?float $etatDettes1AnAuPlus): self
    {
        $this->initialized['etatDettes1AnAuPlus'] = true;
        $this->etatDettes1AnAuPlus = $etatDettes1AnAuPlus;

        return $this;
    }

    /**
     * Liquidité générale de l'entreprise.
     */
    public function getLiquiditeGenerale(): ?float
    {
        return $this->liquiditeGenerale;
    }

    /**
     * Liquidité générale de l'entreprise.
     */
    public function setLiquiditeGenerale(?float $liquiditeGenerale): self
    {
        $this->initialized['liquiditeGenerale'] = true;
        $this->liquiditeGenerale = $liquiditeGenerale;

        return $this;
    }

    /**
     * Couverture des dettes de l'entreprise.
     */
    public function getCouvertureDettes(): ?float
    {
        return $this->couvertureDettes;
    }

    /**
     * Couverture des dettes de l'entreprise.
     */
    public function setCouvertureDettes(?float $couvertureDettes): self
    {
        $this->initialized['couvertureDettes'] = true;
        $this->couvertureDettes = $couvertureDettes;

        return $this;
    }

    /**
     * Marge nette (en %) de l'entreprise.
     */
    public function getMargeNette(): ?float
    {
        return $this->margeNette;
    }

    /**
     * Marge nette (en %) de l'entreprise.
     */
    public function setMargeNette(?float $margeNette): self
    {
        $this->initialized['margeNette'] = true;
        $this->margeNette = $margeNette;

        return $this;
    }

    /**
     * Rentabilité sur fonds propres (en %) de l'entreprise.
     */
    public function getRentabiliteFondsPropres(): ?float
    {
        return $this->rentabiliteFondsPropres;
    }

    /**
     * Rentabilité sur fonds propres (en %) de l'entreprise.
     */
    public function setRentabiliteFondsPropres(?float $rentabiliteFondsPropres): self
    {
        $this->initialized['rentabiliteFondsPropres'] = true;
        $this->rentabiliteFondsPropres = $rentabiliteFondsPropres;

        return $this;
    }

    /**
     * Rentabilité économique (en %) de l'entreprise.
     */
    public function getRentabiliteEconomique(): ?float
    {
        return $this->rentabiliteEconomique;
    }

    /**
     * Rentabilité économique (en %) de l'entreprise.
     */
    public function setRentabiliteEconomique(?float $rentabiliteEconomique): self
    {
        $this->initialized['rentabiliteEconomique'] = true;
        $this->rentabiliteEconomique = $rentabiliteEconomique;

        return $this;
    }

    /**
     * Valeur ajoutée de l'entreprise.
     */
    public function getValeurAjoutee(): ?float
    {
        return $this->valeurAjoutee;
    }

    /**
     * Valeur ajoutée de l'entreprise.
     */
    public function setValeurAjoutee(?float $valeurAjoutee): self
    {
        $this->initialized['valeurAjoutee'] = true;
        $this->valeurAjoutee = $valeurAjoutee;

        return $this;
    }

    /**
     * Valeur ajoutée / CA (en %) de l'entreprise.
     */
    public function getValeurAjouteeCA(): ?float
    {
        return $this->valeurAjouteeCA;
    }

    /**
     * Valeur ajoutée / CA (en %) de l'entreprise.
     */
    public function setValeurAjouteeCA(?float $valeurAjouteeCA): self
    {
        $this->initialized['valeurAjouteeCA'] = true;
        $this->valeurAjouteeCA = $valeurAjouteeCA;

        return $this;
    }

    /**
     * Salaires et charges sociales de l'entreprise.
     */
    public function getSalairesChargesSociales(): ?float
    {
        return $this->salairesChargesSociales;
    }

    /**
     * Salaires et charges sociales de l'entreprise.
     */
    public function setSalairesChargesSociales(?float $salairesChargesSociales): self
    {
        $this->initialized['salairesChargesSociales'] = true;
        $this->salairesChargesSociales = $salairesChargesSociales;

        return $this;
    }

    /**
     * Salaires / CA (en %) de l'entreprise.
     */
    public function getSalairesCA(): ?float
    {
        return $this->salairesCA;
    }

    /**
     * Salaires / CA (en %) de l'entreprise.
     */
    public function setSalairesCA(?float $salairesCA): self
    {
        $this->initialized['salairesCA'] = true;
        $this->salairesCA = $salairesCA;

        return $this;
    }

    /**
     * Impôts et taxes de l'entreprise.
     */
    public function getImpotsTaxes(): ?float
    {
        return $this->impotsTaxes;
    }

    /**
     * Impôts et taxes de l'entreprise.
     */
    public function setImpotsTaxes(?float $impotsTaxes): self
    {
        $this->initialized['impotsTaxes'] = true;
        $this->impotsTaxes = $impotsTaxes;

        return $this;
    }
}
