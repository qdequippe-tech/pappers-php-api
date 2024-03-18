<?php

namespace Qdequippe\Pappers\Api\Model;

class RechercheBeneficiairesGetResponse200ResultatsItem extends \ArrayObject
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
     * Prénom du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Pseudonyme du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $pseudonyme;
    /**
     * Nom complet du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $nomComplet;
    /**
     * Mois et année de naissance du bénéficiaire effectif, au format MM/AAAA.
     *
     * @var string|null
     */
    protected $dateDeNaissanceFormate;
    /**
     * Nationalité du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $nationalite;
    /**
     * Parts détenues par le bénéficiaire effectif, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentageParts;
    /**
     * Droits de vote détenus par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageVotes;
    /**
     * Droits de vote détenus de façon indirecte par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageVotesIndirect;
    /**
     * Droits de vote détenus de façon directe par le bénéficiaire effectif, en pourcentage des droits de vote totaux.
     *
     * @var float|null
     */
    protected $pourcentageVotesDirects;
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
     * Parts dont le bénéficiaire effectif a vocation à devenir titulaire par l'effet d'un acte juridique, en pourcentage des parts totales.
     *
     * @var float|null
     */
    protected $pourcentagePartsVocationTitulaire;
    /**
     * Vaut vrai dans le cas où le bénéficiaire effectif est le représentant légal du placement collectif (cas où le placement collectif n'a pas délégué sa gestion à une société de gestion).
     *
     * @var bool|null
     */
    protected $representantLegalPlacementSansGestionDelegation;
    /**
     * Code postal du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Vaut vrai si le moyen de contrôle est le pouvoir de nommer ou de révoquer la majorité des membres des organes d'administration, de gestion, de direction ou de surveillance de la personne morale.
     *
     * @var bool|null
     */
    protected $detentionPouvoirNomMembreConseilAdministration;
    /**
     * Ville du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Date de naissance complète du bénéficiaire effectif, au format JJ/MM/AAAA.
     *
     * @var \DateTime|null
     */
    protected $dateDeNaissanceCompleteFormatee;
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
     * Ville de naissance du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $villeDeNaissance;
    /**
     * Vaut vrai pour les moyens de contrôle sur les organes d'administration, de gestion, de direction ou de surveillance de la personne morale autre que le pouvoir de nommer ou de révoquer la majorité des membres.
     *
     * @var bool|null
     */
    protected $detentionPouvoirDecisionAg;
    /**
     * Pays du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Mois et année de naissance du bénéficiaire effectif, au format MM/AAAA.
     *
     * @var string|null
     */
    protected $dateDeNaissanceFormatee;
    /**
     * Code pays du bénéficiaire effectif.
     *
     * @var string|null
     */
    protected $codePays;
    /**
     * Liste des entreprises dont le bénéficiaire effectif est bénéficiaire effectif, dans la limite de 100 entreprises.
     *
     * @var list<EntrepriseRecherche>|null
     */
    protected $entreprises;
    /**
     * Nombre d'entreprises du bénéficiaire effectif au total.
     *
     * @var int|null
     */
    protected $nbEntreprisesTotal;
    /**
     * Liste des entreprises dont le bénéficiaire effectif est dirigeant (sans forcément en être bénéficiaire effectif), dans la limite de 100 entreprises.
     *
     * @var list<EntrepriseRecherche>|null
     */
    protected $entreprisesDirigeant;
    /**
     * Nombre d'entreprises dont le bénéficiaire effectif est dirigeant au total.
     *
     * @var int|null
     */
    protected $nbEntreprisesDirigeantTotal;

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
     * Prénom du bénéficiaire effectif.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénom du bénéficiaire effectif.
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Pseudonyme du bénéficiaire effectif.
     */
    public function getPseudonyme(): ?string
    {
        return $this->pseudonyme;
    }

    /**
     * Pseudonyme du bénéficiaire effectif.
     */
    public function setPseudonyme(?string $pseudonyme): self
    {
        $this->initialized['pseudonyme'] = true;
        $this->pseudonyme = $pseudonyme;

        return $this;
    }

    /**
     * Nom complet du bénéficiaire effectif.
     */
    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    /**
     * Nom complet du bénéficiaire effectif.
     */
    public function setNomComplet(?string $nomComplet): self
    {
        $this->initialized['nomComplet'] = true;
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Mois et année de naissance du bénéficiaire effectif, au format MM/AAAA.
     */
    public function getDateDeNaissanceFormate(): ?string
    {
        return $this->dateDeNaissanceFormate;
    }

    /**
     * Mois et année de naissance du bénéficiaire effectif, au format MM/AAAA.
     */
    public function setDateDeNaissanceFormate(?string $dateDeNaissanceFormate): self
    {
        $this->initialized['dateDeNaissanceFormate'] = true;
        $this->dateDeNaissanceFormate = $dateDeNaissanceFormate;

        return $this;
    }

    /**
     * Nationalité du bénéficiaire effectif.
     */
    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    /**
     * Nationalité du bénéficiaire effectif.
     */
    public function setNationalite(?string $nationalite): self
    {
        $this->initialized['nationalite'] = true;
        $this->nationalite = $nationalite;

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
     * Date de naissance complète du bénéficiaire effectif, au format JJ/MM/AAAA.
     */
    public function getDateDeNaissanceCompleteFormatee(): ?\DateTime
    {
        return $this->dateDeNaissanceCompleteFormatee;
    }

    /**
     * Date de naissance complète du bénéficiaire effectif, au format JJ/MM/AAAA.
     */
    public function setDateDeNaissanceCompleteFormatee(?\DateTime $dateDeNaissanceCompleteFormatee): self
    {
        $this->initialized['dateDeNaissanceCompleteFormatee'] = true;
        $this->dateDeNaissanceCompleteFormatee = $dateDeNaissanceCompleteFormatee;

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
     * Code pays du bénéficiaire effectif.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code pays du bénéficiaire effectif.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Liste des entreprises dont le bénéficiaire effectif est bénéficiaire effectif, dans la limite de 100 entreprises.
     *
     * @return list<EntrepriseRecherche>|null
     */
    public function getEntreprises(): ?array
    {
        return $this->entreprises;
    }

    /**
     * Liste des entreprises dont le bénéficiaire effectif est bénéficiaire effectif, dans la limite de 100 entreprises.
     *
     * @param list<EntrepriseRecherche>|null $entreprises
     */
    public function setEntreprises(?array $entreprises): self
    {
        $this->initialized['entreprises'] = true;
        $this->entreprises = $entreprises;

        return $this;
    }

    /**
     * Nombre d'entreprises du bénéficiaire effectif au total.
     */
    public function getNbEntreprisesTotal(): ?int
    {
        return $this->nbEntreprisesTotal;
    }

    /**
     * Nombre d'entreprises du bénéficiaire effectif au total.
     */
    public function setNbEntreprisesTotal(?int $nbEntreprisesTotal): self
    {
        $this->initialized['nbEntreprisesTotal'] = true;
        $this->nbEntreprisesTotal = $nbEntreprisesTotal;

        return $this;
    }

    /**
     * Liste des entreprises dont le bénéficiaire effectif est dirigeant (sans forcément en être bénéficiaire effectif), dans la limite de 100 entreprises.
     *
     * @return list<EntrepriseRecherche>|null
     */
    public function getEntreprisesDirigeant(): ?array
    {
        return $this->entreprisesDirigeant;
    }

    /**
     * Liste des entreprises dont le bénéficiaire effectif est dirigeant (sans forcément en être bénéficiaire effectif), dans la limite de 100 entreprises.
     *
     * @param list<EntrepriseRecherche>|null $entreprisesDirigeant
     */
    public function setEntreprisesDirigeant(?array $entreprisesDirigeant): self
    {
        $this->initialized['entreprisesDirigeant'] = true;
        $this->entreprisesDirigeant = $entreprisesDirigeant;

        return $this;
    }

    /**
     * Nombre d'entreprises dont le bénéficiaire effectif est dirigeant au total.
     */
    public function getNbEntreprisesDirigeantTotal(): ?int
    {
        return $this->nbEntreprisesDirigeantTotal;
    }

    /**
     * Nombre d'entreprises dont le bénéficiaire effectif est dirigeant au total.
     */
    public function setNbEntreprisesDirigeantTotal(?int $nbEntreprisesDirigeantTotal): self
    {
        $this->initialized['nbEntreprisesDirigeantTotal'] = true;
        $this->nbEntreprisesDirigeantTotal = $nbEntreprisesDirigeantTotal;

        return $this;
    }
}
