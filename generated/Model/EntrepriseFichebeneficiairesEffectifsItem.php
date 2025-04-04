<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichebeneficiairesEffectifsItem extends \ArrayObject
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
     * Date de génération des bénéficiaires effectifs, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateGreffe;
    /**
     * Type du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Nom du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Nom d'usage du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $nomUsage;
    /**
     * Prénoms du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Prénom usuel du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $prenomUsuel;
    /**
     * @var string|null
     */
    protected $pseudonyme;
    /**
     * Sexe du bénéficiaire si personne physique. F pour féminin, M pour masculin.
     *
     * @var string|null
     */
    protected $sexe;
    /**
     * Mois et année de naissance du bénéficiaire effectif, au format MM/AAAA.
     *
     * @var string|null
     */
    protected $dateDeNaissanceFormatee;
    /**
     * Date de naissance complète du bénéficiaire effectif, au format JJ/MM/AAAA.
     *
     * @var string|null
     */
    protected $dateDeNaissanceCompleteFormatee;
    /**
     * Nationalité du bénéficiaire effectif. Peut contenir plusieurs nationalités.
     *
     * @var string|null
     */
    protected $nationalite;
    /**
     * Code(s) nationalité(s) du bénéficiaire effectif.
     *
     * @var list<string>|null
     */
    protected $codesNationalites;
    /**
     * Ville de naissance du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $villeDeNaissance;
    /**
     * Pays de naissance du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $paysDeNaissance;
    /**
     * Code du pays de naissance du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $codePaysDeNaissance;
    /**
     * Première ligne de l'adresse du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $adresseLigne1;
    /**
     * Deuxième ligne de l'adresse du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $adresseLigne2;
    /**
     * Troisième ligne de l'adresse du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $adresseLigne3;
    /**
     * Code postal du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Ville du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Pays du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Code du pays du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $codePays;
    /**
     * Parts détenues par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageParts;
    /**
     * Parts détenues de façon directe par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentagePartsDirectes;
    /**
     * Parts détenues de façon indirecte par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentagePartsIndirectes;
    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire par l'effet d'un acte juridique, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentagePartsVocationTitulaire;
    /**
     * Détails des parts détenues de façon directe par le bénéficiaire effectif.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes|null
     */
    protected $detailsPartsDirectes;
    /**
     * Détails des parts détenues de façon indirecte par le bénéficiaire effectif.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes|null
     */
    protected $detailsPartsIndirectes;
    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire|null
     */
    protected $detailsPartsVocationTitulaire;
    /**
     * Droits de vote détenus par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageVotes;
    /**
     * Droits de vote détenus de façon directe par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageVotesDirects;
    /**
     * Droits de vote détenus de façon indirecte par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageVotesIndirect;
    /**
     * Détails des droits de vote détenus de façon directe par le bénéficiaire effectif.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects|null
     */
    protected $detailsVotesDirects;
    /**
     * Détails des droits de vote détenus de façon indirecte par le bénéficiaire effectif.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects|null
     */
    protected $detailsVotesIndirects;
    /**
     * Détails sur la société de gestion, le cas échéant.
     *
     * @var EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion|null
     */
    protected $detailsSocieteDeGestion;
    /**
     * Vaut vrai pour les moyens de contrôle sur les organes d'administration, de gestion, de direction ou de surveillance de la personne morale autre que le pouvoir de nommer ou de révoquer la majorité des membres.
     *
     * @var bool|null
     */
    protected $detentionPouvoirDecisionAg;
    /**
     * Vaut vrai si le moyen de contrôle est le pouvoir de nommer ou de révoquer la majorité des membres des organes d'administration, de gestion, de direction ou de surveillance de la personne morale.
     *
     * @var bool|null
     */
    protected $detentionPouvoirNomMembreConseilAdministration;
    /**
     * Vaut vrai s'il existe d'autres moyens de contrôle.
     *
     * @var bool|null
     */
    protected $detentionAutresMoyensControle;
    /**
     * Vaut vrai dans le cas où le bénéficiaire effectif a été défini comme le représentant légal par défaut.
     *
     * @var bool|null
     */
    protected $beneficiaireRepresentantLegal;
    /**
     * Vaut vrai dans le cas où le bénéficiaire effectif est le représentant légal du placement collectif (cas où le placement collectif n'a pas délégué sa gestion à une société de gestion).
     *
     * @var bool|null
     */
    protected $representantLegalPlacementSansGestionDelegation;
    /**
     * Informations sur le statut de personne politiquement exposée. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var PersonnePolitiquementExposee|null
     */
    protected $personnePolitiquementExposee;
    /**
     * Vaut vrai si le bénéficiaire effectif est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var bool|null
     */
    protected $sanctionsEnCours;
    /**
     * Liste des sanctions du bénéficiaire effectif. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var list<Sanction>|null
     */
    protected $sanctions;

    /**
     * Date de génération des bénéficiaires effectifs, au format AAAA-MM-JJ.
     */
    public function getDateGreffe(): ?string
    {
        return $this->dateGreffe;
    }

    /**
     * Date de génération des bénéficiaires effectifs, au format AAAA-MM-JJ.
     */
    public function setDateGreffe(?string $dateGreffe): self
    {
        $this->initialized['dateGreffe'] = true;
        $this->dateGreffe = $dateGreffe;

        return $this;
    }

    /**
     * Type du bénéficiaire effectif.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type du bénéficiaire effectif.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Nom du bénéficiaire effectif.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom du bénéficiaire effectif.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Nom d'usage du bénéficiaire effectif.
     */
    public function getNomUsage(): ?string
    {
        return $this->nomUsage;
    }

    /**
     * Nom d'usage du bénéficiaire effectif.
     */
    public function setNomUsage(?string $nomUsage): self
    {
        $this->initialized['nomUsage'] = true;
        $this->nomUsage = $nomUsage;

        return $this;
    }

    /**
     * Prénoms du bénéficiaire effectif.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénoms du bénéficiaire effectif.
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Prénom usuel du bénéficiaire effectif.
     */
    public function getPrenomUsuel(): ?string
    {
        return $this->prenomUsuel;
    }

    /**
     * Prénom usuel du bénéficiaire effectif.
     */
    public function setPrenomUsuel(?string $prenomUsuel): self
    {
        $this->initialized['prenomUsuel'] = true;
        $this->prenomUsuel = $prenomUsuel;

        return $this;
    }

    public function getPseudonyme(): ?string
    {
        return $this->pseudonyme;
    }

    public function setPseudonyme(?string $pseudonyme): self
    {
        $this->initialized['pseudonyme'] = true;
        $this->pseudonyme = $pseudonyme;

        return $this;
    }

    /**
     * Sexe du bénéficiaire si personne physique. F pour féminin, M pour masculin.
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * Sexe du bénéficiaire si personne physique. F pour féminin, M pour masculin.
     */
    public function setSexe(?string $sexe): self
    {
        $this->initialized['sexe'] = true;
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Mois et année de naissance du bénéficiaire effectif, au format MM/AAAA.
     */
    public function getDateDeNaissanceFormatee(): ?string
    {
        return $this->dateDeNaissanceFormatee;
    }

    /**
     * Mois et année de naissance du bénéficiaire effectif, au format MM/AAAA.
     */
    public function setDateDeNaissanceFormatee(?string $dateDeNaissanceFormatee): self
    {
        $this->initialized['dateDeNaissanceFormatee'] = true;
        $this->dateDeNaissanceFormatee = $dateDeNaissanceFormatee;

        return $this;
    }

    /**
     * Date de naissance complète du bénéficiaire effectif, au format JJ/MM/AAAA.
     */
    public function getDateDeNaissanceCompleteFormatee(): ?string
    {
        return $this->dateDeNaissanceCompleteFormatee;
    }

    /**
     * Date de naissance complète du bénéficiaire effectif, au format JJ/MM/AAAA.
     */
    public function setDateDeNaissanceCompleteFormatee(?string $dateDeNaissanceCompleteFormatee): self
    {
        $this->initialized['dateDeNaissanceCompleteFormatee'] = true;
        $this->dateDeNaissanceCompleteFormatee = $dateDeNaissanceCompleteFormatee;

        return $this;
    }

    /**
     * Nationalité du bénéficiaire effectif. Peut contenir plusieurs nationalités.
     */
    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    /**
     * Nationalité du bénéficiaire effectif. Peut contenir plusieurs nationalités.
     */
    public function setNationalite(?string $nationalite): self
    {
        $this->initialized['nationalite'] = true;
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Code(s) nationalité(s) du bénéficiaire effectif.
     *
     * @return list<string>|null
     */
    public function getCodesNationalites(): ?array
    {
        return $this->codesNationalites;
    }

    /**
     * Code(s) nationalité(s) du bénéficiaire effectif.
     *
     * @param list<string>|null $codesNationalites
     */
    public function setCodesNationalites(?array $codesNationalites): self
    {
        $this->initialized['codesNationalites'] = true;
        $this->codesNationalites = $codesNationalites;

        return $this;
    }

    /**
     * Ville de naissance du bénéficiaire effectif.
     */
    public function getVilleDeNaissance(): ?string
    {
        return $this->villeDeNaissance;
    }

    /**
     * Ville de naissance du bénéficiaire effectif.
     */
    public function setVilleDeNaissance(?string $villeDeNaissance): self
    {
        $this->initialized['villeDeNaissance'] = true;
        $this->villeDeNaissance = $villeDeNaissance;

        return $this;
    }

    /**
     * Pays de naissance du bénéficiaire effectif.
     */
    public function getPaysDeNaissance(): ?string
    {
        return $this->paysDeNaissance;
    }

    /**
     * Pays de naissance du bénéficiaire effectif.
     */
    public function setPaysDeNaissance(?string $paysDeNaissance): self
    {
        $this->initialized['paysDeNaissance'] = true;
        $this->paysDeNaissance = $paysDeNaissance;

        return $this;
    }

    /**
     * Code du pays de naissance du bénéficiaire effectif.
     */
    public function getCodePaysDeNaissance(): ?string
    {
        return $this->codePaysDeNaissance;
    }

    /**
     * Code du pays de naissance du bénéficiaire effectif.
     */
    public function setCodePaysDeNaissance(?string $codePaysDeNaissance): self
    {
        $this->initialized['codePaysDeNaissance'] = true;
        $this->codePaysDeNaissance = $codePaysDeNaissance;

        return $this;
    }

    /**
     * Première ligne de l'adresse du bénéficiaire effectif.
     */
    public function getAdresseLigne1(): ?string
    {
        return $this->adresseLigne1;
    }

    /**
     * Première ligne de l'adresse du bénéficiaire effectif.
     */
    public function setAdresseLigne1(?string $adresseLigne1): self
    {
        $this->initialized['adresseLigne1'] = true;
        $this->adresseLigne1 = $adresseLigne1;

        return $this;
    }

    /**
     * Deuxième ligne de l'adresse du bénéficiaire effectif.
     */
    public function getAdresseLigne2(): ?string
    {
        return $this->adresseLigne2;
    }

    /**
     * Deuxième ligne de l'adresse du bénéficiaire effectif.
     */
    public function setAdresseLigne2(?string $adresseLigne2): self
    {
        $this->initialized['adresseLigne2'] = true;
        $this->adresseLigne2 = $adresseLigne2;

        return $this;
    }

    /**
     * Troisième ligne de l'adresse du bénéficiaire effectif.
     */
    public function getAdresseLigne3(): ?string
    {
        return $this->adresseLigne3;
    }

    /**
     * Troisième ligne de l'adresse du bénéficiaire effectif.
     */
    public function setAdresseLigne3(?string $adresseLigne3): self
    {
        $this->initialized['adresseLigne3'] = true;
        $this->adresseLigne3 = $adresseLigne3;

        return $this;
    }

    /**
     * Code postal du bénéficiaire effectif.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal du bénéficiaire effectif.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Ville du bénéficiaire effectif.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville du bénéficiaire effectif.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Pays du bénéficiaire effectif.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays du bénéficiaire effectif.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code du pays du bénéficiaire effectif.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code du pays du bénéficiaire effectif.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Parts détenues par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentageParts(): ?float
    {
        return $this->pourcentageParts;
    }

    /**
     * Parts détenues par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentageParts(?float $pourcentageParts): self
    {
        $this->initialized['pourcentageParts'] = true;
        $this->pourcentageParts = $pourcentageParts;

        return $this;
    }

    /**
     * Parts détenues de façon directe par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentagePartsDirectes(): ?float
    {
        return $this->pourcentagePartsDirectes;
    }

    /**
     * Parts détenues de façon directe par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentagePartsDirectes(?float $pourcentagePartsDirectes): self
    {
        $this->initialized['pourcentagePartsDirectes'] = true;
        $this->pourcentagePartsDirectes = $pourcentagePartsDirectes;

        return $this;
    }

    /**
     * Parts détenues de façon indirecte par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function getPourcentagePartsIndirectes(): ?float
    {
        return $this->pourcentagePartsIndirectes;
    }

    /**
     * Parts détenues de façon indirecte par le bénéficiaire effectif, en pourcentage des parts totales.
     */
    public function setPourcentagePartsIndirectes(?float $pourcentagePartsIndirectes): self
    {
        $this->initialized['pourcentagePartsIndirectes'] = true;
        $this->pourcentagePartsIndirectes = $pourcentagePartsIndirectes;

        return $this;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire par l'effet d'un acte juridique, en pourcentage des parts totales.
     */
    public function getPourcentagePartsVocationTitulaire(): ?float
    {
        return $this->pourcentagePartsVocationTitulaire;
    }

    /**
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire par l'effet d'un acte juridique, en pourcentage des parts totales.
     */
    public function setPourcentagePartsVocationTitulaire(?float $pourcentagePartsVocationTitulaire): self
    {
        $this->initialized['pourcentagePartsVocationTitulaire'] = true;
        $this->pourcentagePartsVocationTitulaire = $pourcentagePartsVocationTitulaire;

        return $this;
    }

    /**
     * Détails des parts détenues de façon directe par le bénéficiaire effectif.
     */
    public function getDetailsPartsDirectes(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes
    {
        return $this->detailsPartsDirectes;
    }

    /**
     * Détails des parts détenues de façon directe par le bénéficiaire effectif.
     */
    public function setDetailsPartsDirectes(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsDirectes $detailsPartsDirectes): self
    {
        $this->initialized['detailsPartsDirectes'] = true;
        $this->detailsPartsDirectes = $detailsPartsDirectes;

        return $this;
    }

    /**
     * Détails des parts détenues de façon indirecte par le bénéficiaire effectif.
     */
    public function getDetailsPartsIndirectes(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes
    {
        return $this->detailsPartsIndirectes;
    }

    /**
     * Détails des parts détenues de façon indirecte par le bénéficiaire effectif.
     */
    public function setDetailsPartsIndirectes(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsIndirectes $detailsPartsIndirectes): self
    {
        $this->initialized['detailsPartsIndirectes'] = true;
        $this->detailsPartsIndirectes = $detailsPartsIndirectes;

        return $this;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire.
     */
    public function getDetailsPartsVocationTitulaire(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire
    {
        return $this->detailsPartsVocationTitulaire;
    }

    /**
     * Détails des parts dont le bénéficiaire effectif a vocation à devenir titulaire.
     */
    public function setDetailsPartsVocationTitulaire(?EntrepriseFichebeneficiairesEffectifsItemDetailsPartsVocationTitulaire $detailsPartsVocationTitulaire): self
    {
        $this->initialized['detailsPartsVocationTitulaire'] = true;
        $this->detailsPartsVocationTitulaire = $detailsPartsVocationTitulaire;

        return $this;
    }

    /**
     * Droits de vote détenus par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageVotes(): ?float
    {
        return $this->pourcentageVotes;
    }

    /**
     * Droits de vote détenus par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageVotes(?float $pourcentageVotes): self
    {
        $this->initialized['pourcentageVotes'] = true;
        $this->pourcentageVotes = $pourcentageVotes;

        return $this;
    }

    /**
     * Droits de vote détenus de façon directe par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageVotesDirects(): ?float
    {
        return $this->pourcentageVotesDirects;
    }

    /**
     * Droits de vote détenus de façon directe par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageVotesDirects(?float $pourcentageVotesDirects): self
    {
        $this->initialized['pourcentageVotesDirects'] = true;
        $this->pourcentageVotesDirects = $pourcentageVotesDirects;

        return $this;
    }

    /**
     * Droits de vote détenus de façon indirecte par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function getPourcentageVotesIndirect(): ?float
    {
        return $this->pourcentageVotesIndirect;
    }

    /**
     * Droits de vote détenus de façon indirecte par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     */
    public function setPourcentageVotesIndirect(?float $pourcentageVotesIndirect): self
    {
        $this->initialized['pourcentageVotesIndirect'] = true;
        $this->pourcentageVotesIndirect = $pourcentageVotesIndirect;

        return $this;
    }

    /**
     * Détails des droits de vote détenus de façon directe par le bénéficiaire effectif.
     */
    public function getDetailsVotesDirects(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects
    {
        return $this->detailsVotesDirects;
    }

    /**
     * Détails des droits de vote détenus de façon directe par le bénéficiaire effectif.
     */
    public function setDetailsVotesDirects(?EntrepriseFichebeneficiairesEffectifsItemDetailsVotesDirects $detailsVotesDirects): self
    {
        $this->initialized['detailsVotesDirects'] = true;
        $this->detailsVotesDirects = $detailsVotesDirects;

        return $this;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le bénéficiaire effectif.
     */
    public function getDetailsVotesIndirects(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects
    {
        return $this->detailsVotesIndirects;
    }

    /**
     * Détails des droits de vote détenus de façon indirecte par le bénéficiaire effectif.
     */
    public function setDetailsVotesIndirects(?EntrepriseFichebeneficiairesEffectifsItemDetailsVotesIndirects $detailsVotesIndirects): self
    {
        $this->initialized['detailsVotesIndirects'] = true;
        $this->detailsVotesIndirects = $detailsVotesIndirects;

        return $this;
    }

    /**
     * Détails sur la société de gestion, le cas échéant.
     */
    public function getDetailsSocieteDeGestion(): ?EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion
    {
        return $this->detailsSocieteDeGestion;
    }

    /**
     * Détails sur la société de gestion, le cas échéant.
     */
    public function setDetailsSocieteDeGestion(?EntrepriseFichebeneficiairesEffectifsItemDetailsSocieteDeGestion $detailsSocieteDeGestion): self
    {
        $this->initialized['detailsSocieteDeGestion'] = true;
        $this->detailsSocieteDeGestion = $detailsSocieteDeGestion;

        return $this;
    }

    /**
     * Vaut vrai pour les moyens de contrôle sur les organes d'administration, de gestion, de direction ou de surveillance de la personne morale autre que le pouvoir de nommer ou de révoquer la majorité des membres.
     */
    public function getDetentionPouvoirDecisionAg(): ?bool
    {
        return $this->detentionPouvoirDecisionAg;
    }

    /**
     * Vaut vrai pour les moyens de contrôle sur les organes d'administration, de gestion, de direction ou de surveillance de la personne morale autre que le pouvoir de nommer ou de révoquer la majorité des membres.
     */
    public function setDetentionPouvoirDecisionAg(?bool $detentionPouvoirDecisionAg): self
    {
        $this->initialized['detentionPouvoirDecisionAg'] = true;
        $this->detentionPouvoirDecisionAg = $detentionPouvoirDecisionAg;

        return $this;
    }

    /**
     * Vaut vrai si le moyen de contrôle est le pouvoir de nommer ou de révoquer la majorité des membres des organes d'administration, de gestion, de direction ou de surveillance de la personne morale.
     */
    public function getDetentionPouvoirNomMembreConseilAdministration(): ?bool
    {
        return $this->detentionPouvoirNomMembreConseilAdministration;
    }

    /**
     * Vaut vrai si le moyen de contrôle est le pouvoir de nommer ou de révoquer la majorité des membres des organes d'administration, de gestion, de direction ou de surveillance de la personne morale.
     */
    public function setDetentionPouvoirNomMembreConseilAdministration(?bool $detentionPouvoirNomMembreConseilAdministration): self
    {
        $this->initialized['detentionPouvoirNomMembreConseilAdministration'] = true;
        $this->detentionPouvoirNomMembreConseilAdministration = $detentionPouvoirNomMembreConseilAdministration;

        return $this;
    }

    /**
     * Vaut vrai s'il existe d'autres moyens de contrôle.
     */
    public function getDetentionAutresMoyensControle(): ?bool
    {
        return $this->detentionAutresMoyensControle;
    }

    /**
     * Vaut vrai s'il existe d'autres moyens de contrôle.
     */
    public function setDetentionAutresMoyensControle(?bool $detentionAutresMoyensControle): self
    {
        $this->initialized['detentionAutresMoyensControle'] = true;
        $this->detentionAutresMoyensControle = $detentionAutresMoyensControle;

        return $this;
    }

    /**
     * Vaut vrai dans le cas où le bénéficiaire effectif a été défini comme le représentant légal par défaut.
     */
    public function getBeneficiaireRepresentantLegal(): ?bool
    {
        return $this->beneficiaireRepresentantLegal;
    }

    /**
     * Vaut vrai dans le cas où le bénéficiaire effectif a été défini comme le représentant légal par défaut.
     */
    public function setBeneficiaireRepresentantLegal(?bool $beneficiaireRepresentantLegal): self
    {
        $this->initialized['beneficiaireRepresentantLegal'] = true;
        $this->beneficiaireRepresentantLegal = $beneficiaireRepresentantLegal;

        return $this;
    }

    /**
     * Vaut vrai dans le cas où le bénéficiaire effectif est le représentant légal du placement collectif (cas où le placement collectif n'a pas délégué sa gestion à une société de gestion).
     */
    public function getRepresentantLegalPlacementSansGestionDelegation(): ?bool
    {
        return $this->representantLegalPlacementSansGestionDelegation;
    }

    /**
     * Vaut vrai dans le cas où le bénéficiaire effectif est le représentant légal du placement collectif (cas où le placement collectif n'a pas délégué sa gestion à une société de gestion).
     */
    public function setRepresentantLegalPlacementSansGestionDelegation(?bool $representantLegalPlacementSansGestionDelegation): self
    {
        $this->initialized['representantLegalPlacementSansGestionDelegation'] = true;
        $this->representantLegalPlacementSansGestionDelegation = $representantLegalPlacementSansGestionDelegation;

        return $this;
    }

    /**
     * Informations sur le statut de personne politiquement exposée. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getPersonnePolitiquementExposee(): ?PersonnePolitiquementExposee
    {
        return $this->personnePolitiquementExposee;
    }

    /**
     * Informations sur le statut de personne politiquement exposée. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setPersonnePolitiquementExposee(?PersonnePolitiquementExposee $personnePolitiquementExposee): self
    {
        $this->initialized['personnePolitiquementExposee'] = true;
        $this->personnePolitiquementExposee = $personnePolitiquementExposee;

        return $this;
    }

    /**
     * Vaut vrai si le bénéficiaire effectif est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getSanctionsEnCours(): ?bool
    {
        return $this->sanctionsEnCours;
    }

    /**
     * Vaut vrai si le bénéficiaire effectif est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setSanctionsEnCours(?bool $sanctionsEnCours): self
    {
        $this->initialized['sanctionsEnCours'] = true;
        $this->sanctionsEnCours = $sanctionsEnCours;

        return $this;
    }

    /**
     * Liste des sanctions du bénéficiaire effectif. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @return list<Sanction>|null
     */
    public function getSanctions(): ?array
    {
        return $this->sanctions;
    }

    /**
     * Liste des sanctions du bénéficiaire effectif. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @param list<Sanction>|null $sanctions
     */
    public function setSanctions(?array $sanctions): self
    {
        $this->initialized['sanctions'] = true;
        $this->sanctions = $sanctions;

        return $this;
    }
}
