<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class RechercheDirigeantsGetResponse200ResultatsItem extends \ArrayObject
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
     * Qualité du représentant.
     *
     * @var string
     */
    protected $qualite;
    /**
     * Vrai si le représentant est une personne morale, faux si personne physique.
     *
     * @var bool
     */
    protected $personneMorale;
    /**
     * Date de prise de poste du représentant.
     *
     * @var string
     */
    protected $datePriseDePoste;
    /**
     * Sexe supposé du dirigeant si personne physique. F pour féminin, M pour masculin. Ce champ est estimé à partir du prénom du dirigeant.
     *
     * @var string
     */
    protected $sexe;
    /**
     * Nom du représentant.
     *
     * @var string
     */
    protected $nom;
    /**
     * Prénoms du représentant.
     *
     * @var string
     */
    protected $prenom;
    /**
     * Prénom usuel du représentant.
     *
     * @var string
     */
    protected $prenomUsuel;
    /**
     * Nom complet du représentant.
     *
     * @var string
     */
    protected $nomComplet;
    /**
     * Date de naissance du représentant.
     *
     * @var string
     */
    protected $dateDeNaissance;
    /**
     * Date de naissance formatée du représentant.
     *
     * @var string
     */
    protected $dateDeNaissanceFormate;
    /**
     * Age du représentant.
     *
     * @var int
     */
    protected $age;
    /**
     * Nationalité du représentant.
     *
     * @var string
     */
    protected $nationalite;
    /**
     * Code nationalité du représentant.
     *
     * @var string
     */
    protected $codeNationalite;
    /**
     * Ville de naissance du représentant.
     *
     * @var string
     */
    protected $villeDeNaissance;
    /**
     * Pays de naissance du représentant.
     *
     * @var string
     */
    protected $paysDeNaissance;
    /**
     * Code du pays de naissance du représentant.
     *
     * @var string
     */
    protected $codePaysDeNaissance;
    /**
     * Première ligne de l'adresse du représentant.
     *
     * @var string
     */
    protected $adresseLigne1;
    /**
     * Deuxième ligne de l'adresse du représentant.
     *
     * @var string
     */
    protected $adresseLigne2;
    /**
     * Troisième ligne de l'adresse du représentant.
     *
     * @var string
     */
    protected $adresseLigne3;
    /**
     * Code postal du représentant.
     *
     * @var string
     */
    protected $codePostal;
    /**
     * Ville du représentant.
     *
     * @var string
     */
    protected $ville;
    /**
     * Pays du représentant.
     *
     * @var string
     */
    protected $pays;
    /**
     * Code du pays du représentant.
     *
     * @var string
     */
    protected $codePays;
    /**
     * Vaut vrai si le représentant est toujours à son poste.
     *
     * @var bool
     */
    protected $actuel;
    /**
     * Date de départ de poste dans le cas où le représentant n'est plus un représentant actuel, au format AAAA-MM-JJ.
     *
     * @var string
     */
    protected $dateDepartDePoste;
    /**
     * Forme juridique du représentant dans le cas d'une personne morale.
     *
     * @var string
     */
    protected $formeJuridique;
    /**
     * Liste des entreprises du dirigeant, dans la limite de 100 entreprises.
     *
     * @var EntrepriseRecherche[]
     */
    protected $entreprises;
    /**
     * Nombre d'entreprises du dirigeant au total.
     *
     * @var int
     */
    protected $nbEntreprisesTotal;

    /**
     * Qualité du représentant.
     */
    public function getQualite(): string
    {
        return $this->qualite;
    }

    /**
     * Qualité du représentant.
     */
    public function setQualite(string $qualite): self
    {
        $this->initialized['qualite'] = true;
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Vrai si le représentant est une personne morale, faux si personne physique.
     */
    public function getPersonneMorale(): bool
    {
        return $this->personneMorale;
    }

    /**
     * Vrai si le représentant est une personne morale, faux si personne physique.
     */
    public function setPersonneMorale(bool $personneMorale): self
    {
        $this->initialized['personneMorale'] = true;
        $this->personneMorale = $personneMorale;

        return $this;
    }

    /**
     * Date de prise de poste du représentant.
     */
    public function getDatePriseDePoste(): string
    {
        return $this->datePriseDePoste;
    }

    /**
     * Date de prise de poste du représentant.
     */
    public function setDatePriseDePoste(string $datePriseDePoste): self
    {
        $this->initialized['datePriseDePoste'] = true;
        $this->datePriseDePoste = $datePriseDePoste;

        return $this;
    }

    /**
     * Sexe supposé du dirigeant si personne physique. F pour féminin, M pour masculin. Ce champ est estimé à partir du prénom du dirigeant.
     */
    public function getSexe(): string
    {
        return $this->sexe;
    }

    /**
     * Sexe supposé du dirigeant si personne physique. F pour féminin, M pour masculin. Ce champ est estimé à partir du prénom du dirigeant.
     */
    public function setSexe(string $sexe): self
    {
        $this->initialized['sexe'] = true;
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Nom du représentant.
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Nom du représentant.
     */
    public function setNom(string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Prénoms du représentant.
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Prénoms du représentant.
     */
    public function setPrenom(string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Prénom usuel du représentant.
     */
    public function getPrenomUsuel(): string
    {
        return $this->prenomUsuel;
    }

    /**
     * Prénom usuel du représentant.
     */
    public function setPrenomUsuel(string $prenomUsuel): self
    {
        $this->initialized['prenomUsuel'] = true;
        $this->prenomUsuel = $prenomUsuel;

        return $this;
    }

    /**
     * Nom complet du représentant.
     */
    public function getNomComplet(): string
    {
        return $this->nomComplet;
    }

    /**
     * Nom complet du représentant.
     */
    public function setNomComplet(string $nomComplet): self
    {
        $this->initialized['nomComplet'] = true;
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Date de naissance du représentant.
     */
    public function getDateDeNaissance(): string
    {
        return $this->dateDeNaissance;
    }

    /**
     * Date de naissance du représentant.
     */
    public function setDateDeNaissance(string $dateDeNaissance): self
    {
        $this->initialized['dateDeNaissance'] = true;
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Date de naissance formatée du représentant.
     */
    public function getDateDeNaissanceFormate(): string
    {
        return $this->dateDeNaissanceFormate;
    }

    /**
     * Date de naissance formatée du représentant.
     */
    public function setDateDeNaissanceFormate(string $dateDeNaissanceFormate): self
    {
        $this->initialized['dateDeNaissanceFormate'] = true;
        $this->dateDeNaissanceFormate = $dateDeNaissanceFormate;

        return $this;
    }

    /**
     * Age du représentant.
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Age du représentant.
     */
    public function setAge(int $age): self
    {
        $this->initialized['age'] = true;
        $this->age = $age;

        return $this;
    }

    /**
     * Nationalité du représentant.
     */
    public function getNationalite(): string
    {
        return $this->nationalite;
    }

    /**
     * Nationalité du représentant.
     */
    public function setNationalite(string $nationalite): self
    {
        $this->initialized['nationalite'] = true;
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Code nationalité du représentant.
     */
    public function getCodeNationalite(): string
    {
        return $this->codeNationalite;
    }

    /**
     * Code nationalité du représentant.
     */
    public function setCodeNationalite(string $codeNationalite): self
    {
        $this->initialized['codeNationalite'] = true;
        $this->codeNationalite = $codeNationalite;

        return $this;
    }

    /**
     * Ville de naissance du représentant.
     */
    public function getVilleDeNaissance(): string
    {
        return $this->villeDeNaissance;
    }

    /**
     * Ville de naissance du représentant.
     */
    public function setVilleDeNaissance(string $villeDeNaissance): self
    {
        $this->initialized['villeDeNaissance'] = true;
        $this->villeDeNaissance = $villeDeNaissance;

        return $this;
    }

    /**
     * Pays de naissance du représentant.
     */
    public function getPaysDeNaissance(): string
    {
        return $this->paysDeNaissance;
    }

    /**
     * Pays de naissance du représentant.
     */
    public function setPaysDeNaissance(string $paysDeNaissance): self
    {
        $this->initialized['paysDeNaissance'] = true;
        $this->paysDeNaissance = $paysDeNaissance;

        return $this;
    }

    /**
     * Code du pays de naissance du représentant.
     */
    public function getCodePaysDeNaissance(): string
    {
        return $this->codePaysDeNaissance;
    }

    /**
     * Code du pays de naissance du représentant.
     */
    public function setCodePaysDeNaissance(string $codePaysDeNaissance): self
    {
        $this->initialized['codePaysDeNaissance'] = true;
        $this->codePaysDeNaissance = $codePaysDeNaissance;

        return $this;
    }

    /**
     * Première ligne de l'adresse du représentant.
     */
    public function getAdresseLigne1(): string
    {
        return $this->adresseLigne1;
    }

    /**
     * Première ligne de l'adresse du représentant.
     */
    public function setAdresseLigne1(string $adresseLigne1): self
    {
        $this->initialized['adresseLigne1'] = true;
        $this->adresseLigne1 = $adresseLigne1;

        return $this;
    }

    /**
     * Deuxième ligne de l'adresse du représentant.
     */
    public function getAdresseLigne2(): string
    {
        return $this->adresseLigne2;
    }

    /**
     * Deuxième ligne de l'adresse du représentant.
     */
    public function setAdresseLigne2(string $adresseLigne2): self
    {
        $this->initialized['adresseLigne2'] = true;
        $this->adresseLigne2 = $adresseLigne2;

        return $this;
    }

    /**
     * Troisième ligne de l'adresse du représentant.
     */
    public function getAdresseLigne3(): string
    {
        return $this->adresseLigne3;
    }

    /**
     * Troisième ligne de l'adresse du représentant.
     */
    public function setAdresseLigne3(string $adresseLigne3): self
    {
        $this->initialized['adresseLigne3'] = true;
        $this->adresseLigne3 = $adresseLigne3;

        return $this;
    }

    /**
     * Code postal du représentant.
     */
    public function getCodePostal(): string
    {
        return $this->codePostal;
    }

    /**
     * Code postal du représentant.
     */
    public function setCodePostal(string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Ville du représentant.
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * Ville du représentant.
     */
    public function setVille(string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Pays du représentant.
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * Pays du représentant.
     */
    public function setPays(string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code du pays du représentant.
     */
    public function getCodePays(): string
    {
        return $this->codePays;
    }

    /**
     * Code du pays du représentant.
     */
    public function setCodePays(string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Vaut vrai si le représentant est toujours à son poste.
     */
    public function getActuel(): bool
    {
        return $this->actuel;
    }

    /**
     * Vaut vrai si le représentant est toujours à son poste.
     */
    public function setActuel(bool $actuel): self
    {
        $this->initialized['actuel'] = true;
        $this->actuel = $actuel;

        return $this;
    }

    /**
     * Date de départ de poste dans le cas où le représentant n'est plus un représentant actuel, au format AAAA-MM-JJ.
     */
    public function getDateDepartDePoste(): string
    {
        return $this->dateDepartDePoste;
    }

    /**
     * Date de départ de poste dans le cas où le représentant n'est plus un représentant actuel, au format AAAA-MM-JJ.
     */
    public function setDateDepartDePoste(string $dateDepartDePoste): self
    {
        $this->initialized['dateDepartDePoste'] = true;
        $this->dateDepartDePoste = $dateDepartDePoste;

        return $this;
    }

    /**
     * Forme juridique du représentant dans le cas d'une personne morale.
     */
    public function getFormeJuridique(): string
    {
        return $this->formeJuridique;
    }

    /**
     * Forme juridique du représentant dans le cas d'une personne morale.
     */
    public function setFormeJuridique(string $formeJuridique): self
    {
        $this->initialized['formeJuridique'] = true;
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    /**
     * Liste des entreprises du dirigeant, dans la limite de 100 entreprises.
     *
     * @return EntrepriseRecherche[]
     */
    public function getEntreprises(): array
    {
        return $this->entreprises;
    }

    /**
     * Liste des entreprises du dirigeant, dans la limite de 100 entreprises.
     *
     * @param EntrepriseRecherche[] $entreprises
     */
    public function setEntreprises(array $entreprises): self
    {
        $this->initialized['entreprises'] = true;
        $this->entreprises = $entreprises;

        return $this;
    }

    /**
     * Nombre d'entreprises du dirigeant au total.
     */
    public function getNbEntreprisesTotal(): int
    {
        return $this->nbEntreprisesTotal;
    }

    /**
     * Nombre d'entreprises du dirigeant au total.
     */
    public function setNbEntreprisesTotal(int $nbEntreprisesTotal): self
    {
        $this->initialized['nbEntreprisesTotal'] = true;
        $this->nbEntreprisesTotal = $nbEntreprisesTotal;

        return $this;
    }
}
