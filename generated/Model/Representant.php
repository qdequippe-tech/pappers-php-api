<?php

namespace Qdequippe\Pappers\Api\Model;

class Representant extends \ArrayObject
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
     * @var string|null
     */
    protected $qualite;
    /**
     * Vrai si le représentant est une personne morale, faux si personne physique.
     *
     * @var bool|null
     */
    protected $personneMorale;
    /**
     * Date de prise de poste du représentant.
     *
     * @var string|null
     */
    protected $datePriseDePoste;
    /**
     * Dénomination du représentant si personne morale.
     *
     * @var string|null
     */
    protected $denomination;
    /**
     * Siren du représentant si personne morale.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Forme juridique du représentant si personne morale.
     *
     * @var string|null
     */
    protected $formeJuridique;
    /**
     * Sexe supposé du représentant si personne physique. F pour féminin, M pour masculin. Ce champ est estimé à partir du prénom du représentant.
     *
     * @var string|null
     */
    protected $sexe;
    /**
     * Nom du représentant.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Prénoms du représentant.
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Prénom usuel du représentant.
     *
     * @var string|null
     */
    protected $prenomUsuel;
    /**
     * Nom complet du représentant.
     *
     * @var string|null
     */
    protected $nomComplet;
    /**
     * Date de naissance du représentant.
     *
     * @var string|null
     */
    protected $dateDeNaissance;
    /**
     * Date de naissance formatée du représentant.
     *
     * @var string|null
     */
    protected $dateDeNaissanceFormate;
    /**
     * Age du représentant.
     *
     * @var int|null
     */
    protected $age;
    /**
     * Nationalité du représentant.
     *
     * @var string|null
     */
    protected $nationalite;
    /**
     * Code nationalité du représentant.
     *
     * @var string|null
     */
    protected $codeNationalite;
    /**
     * Ville de naissance du représentant.
     *
     * @var string|null
     */
    protected $villeDeNaissance;
    /**
     * Pays de naissance du représentant.
     *
     * @var string|null
     */
    protected $paysDeNaissance;
    /**
     * Code du pays de naissance du représentant.
     *
     * @var string|null
     */
    protected $codePaysDeNaissance;
    /**
     * Première ligne de l'adresse du représentant.
     *
     * @var string|null
     */
    protected $adresseLigne1;
    /**
     * Deuxième ligne de l'adresse du représentant.
     *
     * @var string|null
     */
    protected $adresseLigne2;
    /**
     * Troisième ligne de l'adresse du représentant.
     *
     * @var string|null
     */
    protected $adresseLigne3;
    /**
     * Code postal du représentant.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Ville du représentant.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Pays du représentant.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Code du pays du représentant.
     *
     * @var string|null
     */
    protected $codePays;
    /**
     * Informations sur le statut de personne politiquement exposée. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var PersonnePolitiquementExposee|null
     */
    protected $personnePolitiquementExposee;
    /**
     * Vaut vrai si le représentant est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var bool|null
     */
    protected $sanctionsEnCours;
    /**
     * Liste des sanctions du représentant. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var list<Sanction>|null
     */
    protected $sanctions;

    /**
     * Qualité du représentant.
     */
    public function getQualite(): ?string
    {
        return $this->qualite;
    }

    /**
     * Qualité du représentant.
     */
    public function setQualite(?string $qualite): self
    {
        $this->initialized['qualite'] = true;
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Vrai si le représentant est une personne morale, faux si personne physique.
     */
    public function getPersonneMorale(): ?bool
    {
        return $this->personneMorale;
    }

    /**
     * Vrai si le représentant est une personne morale, faux si personne physique.
     */
    public function setPersonneMorale(?bool $personneMorale): self
    {
        $this->initialized['personneMorale'] = true;
        $this->personneMorale = $personneMorale;

        return $this;
    }

    /**
     * Date de prise de poste du représentant.
     */
    public function getDatePriseDePoste(): ?string
    {
        return $this->datePriseDePoste;
    }

    /**
     * Date de prise de poste du représentant.
     */
    public function setDatePriseDePoste(?string $datePriseDePoste): self
    {
        $this->initialized['datePriseDePoste'] = true;
        $this->datePriseDePoste = $datePriseDePoste;

        return $this;
    }

    /**
     * Dénomination du représentant si personne morale.
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination du représentant si personne morale.
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Siren du représentant si personne morale.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * Siren du représentant si personne morale.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Forme juridique du représentant si personne morale.
     */
    public function getFormeJuridique(): ?string
    {
        return $this->formeJuridique;
    }

    /**
     * Forme juridique du représentant si personne morale.
     */
    public function setFormeJuridique(?string $formeJuridique): self
    {
        $this->initialized['formeJuridique'] = true;
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    /**
     * Sexe supposé du représentant si personne physique. F pour féminin, M pour masculin. Ce champ est estimé à partir du prénom du représentant.
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * Sexe supposé du représentant si personne physique. F pour féminin, M pour masculin. Ce champ est estimé à partir du prénom du représentant.
     */
    public function setSexe(?string $sexe): self
    {
        $this->initialized['sexe'] = true;
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Nom du représentant.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom du représentant.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Prénoms du représentant.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénoms du représentant.
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Prénom usuel du représentant.
     */
    public function getPrenomUsuel(): ?string
    {
        return $this->prenomUsuel;
    }

    /**
     * Prénom usuel du représentant.
     */
    public function setPrenomUsuel(?string $prenomUsuel): self
    {
        $this->initialized['prenomUsuel'] = true;
        $this->prenomUsuel = $prenomUsuel;

        return $this;
    }

    /**
     * Nom complet du représentant.
     */
    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    /**
     * Nom complet du représentant.
     */
    public function setNomComplet(?string $nomComplet): self
    {
        $this->initialized['nomComplet'] = true;
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Date de naissance du représentant.
     */
    public function getDateDeNaissance(): ?string
    {
        return $this->dateDeNaissance;
    }

    /**
     * Date de naissance du représentant.
     */
    public function setDateDeNaissance(?string $dateDeNaissance): self
    {
        $this->initialized['dateDeNaissance'] = true;
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Date de naissance formatée du représentant.
     */
    public function getDateDeNaissanceFormate(): ?string
    {
        return $this->dateDeNaissanceFormate;
    }

    /**
     * Date de naissance formatée du représentant.
     */
    public function setDateDeNaissanceFormate(?string $dateDeNaissanceFormate): self
    {
        $this->initialized['dateDeNaissanceFormate'] = true;
        $this->dateDeNaissanceFormate = $dateDeNaissanceFormate;

        return $this;
    }

    /**
     * Age du représentant.
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * Age du représentant.
     */
    public function setAge(?int $age): self
    {
        $this->initialized['age'] = true;
        $this->age = $age;

        return $this;
    }

    /**
     * Nationalité du représentant.
     */
    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    /**
     * Nationalité du représentant.
     */
    public function setNationalite(?string $nationalite): self
    {
        $this->initialized['nationalite'] = true;
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Code nationalité du représentant.
     */
    public function getCodeNationalite(): ?string
    {
        return $this->codeNationalite;
    }

    /**
     * Code nationalité du représentant.
     */
    public function setCodeNationalite(?string $codeNationalite): self
    {
        $this->initialized['codeNationalite'] = true;
        $this->codeNationalite = $codeNationalite;

        return $this;
    }

    /**
     * Ville de naissance du représentant.
     */
    public function getVilleDeNaissance(): ?string
    {
        return $this->villeDeNaissance;
    }

    /**
     * Ville de naissance du représentant.
     */
    public function setVilleDeNaissance(?string $villeDeNaissance): self
    {
        $this->initialized['villeDeNaissance'] = true;
        $this->villeDeNaissance = $villeDeNaissance;

        return $this;
    }

    /**
     * Pays de naissance du représentant.
     */
    public function getPaysDeNaissance(): ?string
    {
        return $this->paysDeNaissance;
    }

    /**
     * Pays de naissance du représentant.
     */
    public function setPaysDeNaissance(?string $paysDeNaissance): self
    {
        $this->initialized['paysDeNaissance'] = true;
        $this->paysDeNaissance = $paysDeNaissance;

        return $this;
    }

    /**
     * Code du pays de naissance du représentant.
     */
    public function getCodePaysDeNaissance(): ?string
    {
        return $this->codePaysDeNaissance;
    }

    /**
     * Code du pays de naissance du représentant.
     */
    public function setCodePaysDeNaissance(?string $codePaysDeNaissance): self
    {
        $this->initialized['codePaysDeNaissance'] = true;
        $this->codePaysDeNaissance = $codePaysDeNaissance;

        return $this;
    }

    /**
     * Première ligne de l'adresse du représentant.
     */
    public function getAdresseLigne1(): ?string
    {
        return $this->adresseLigne1;
    }

    /**
     * Première ligne de l'adresse du représentant.
     */
    public function setAdresseLigne1(?string $adresseLigne1): self
    {
        $this->initialized['adresseLigne1'] = true;
        $this->adresseLigne1 = $adresseLigne1;

        return $this;
    }

    /**
     * Deuxième ligne de l'adresse du représentant.
     */
    public function getAdresseLigne2(): ?string
    {
        return $this->adresseLigne2;
    }

    /**
     * Deuxième ligne de l'adresse du représentant.
     */
    public function setAdresseLigne2(?string $adresseLigne2): self
    {
        $this->initialized['adresseLigne2'] = true;
        $this->adresseLigne2 = $adresseLigne2;

        return $this;
    }

    /**
     * Troisième ligne de l'adresse du représentant.
     */
    public function getAdresseLigne3(): ?string
    {
        return $this->adresseLigne3;
    }

    /**
     * Troisième ligne de l'adresse du représentant.
     */
    public function setAdresseLigne3(?string $adresseLigne3): self
    {
        $this->initialized['adresseLigne3'] = true;
        $this->adresseLigne3 = $adresseLigne3;

        return $this;
    }

    /**
     * Code postal du représentant.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal du représentant.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Ville du représentant.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville du représentant.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Pays du représentant.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays du représentant.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code du pays du représentant.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code du pays du représentant.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

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
     * Vaut vrai si le représentant est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getSanctionsEnCours(): ?bool
    {
        return $this->sanctionsEnCours;
    }

    /**
     * Vaut vrai si le représentant est actuellement sous sanction. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setSanctionsEnCours(?bool $sanctionsEnCours): self
    {
        $this->initialized['sanctionsEnCours'] = true;
        $this->sanctionsEnCours = $sanctionsEnCours;

        return $this;
    }

    /**
     * Liste des sanctions du représentant. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @return list<Sanction>|null
     */
    public function getSanctions(): ?array
    {
        return $this->sanctions;
    }

    /**
     * Liste des sanctions du représentant. Uniquement présent si demandé dans les champs supplémentaires.
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
