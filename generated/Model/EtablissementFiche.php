<?php

namespace Qdequippe\Pappers\Api\Model;

class EtablissementFiche extends \ArrayObject
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
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     *
     * @var string|null
     */
    protected $siret;
    /**
     * Numéro siret de l'établissement au format xxx xxx xxx xxxxx.
     *
     * @var string|null
     */
    protected $siretFormate;
    /**
     * Si vrai, l'établissement est en diffusion partielle. Dans ce cas, tous les champs relatifs à son adresse - en dehors de la ville et du pays - sont à `null`.
     *
     * @var bool|null
     */
    protected $diffusionPartielle;
    /**
     * Numéro NIC de l'établissement.
     *
     * @var string|null
     */
    protected $nic;
    /**
     * Code postal de l'établissement.
     *
     * @var string|null
     */
    protected $codePostal;
    /**
     * Ville de l'établissement.
     *
     * @var string|null
     */
    protected $ville;
    /**
     * Pays de l'établissement.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Code du pays de l'établissement.
     *
     * @var string|null
     */
    protected $codePays;
    /**
     * Latitude de l'établissement.
     *
     * @var float|null
     */
    protected $latitude;
    /**
     * Longitude de l'établissement.
     *
     * @var float|null
     */
    protected $longitude;
    /**
     * Vrai si l'établissement est cessé, faux si il est en activité.
     *
     * @var bool|null
     */
    protected $etablissementCesse;
    /**
     * Vrai si l'établissement est siège, faux s'il ne l'est pas.
     *
     * @var bool|null
     */
    protected $siege;
    /**
     * Si vrai, l'établissement a au moins un employé.
     *
     * @var bool|null
     */
    protected $etablissementEmployeur;
    /**
     * Tranche d'effectif de l'établissement.
     *
     * @var string|null
     */
    protected $effectif;
    /**
     * Effectif minimal de l'établissement.
     *
     * @var int|null
     */
    protected $effectifMin;
    /**
     * Effectif maximal de l'établissement.
     *
     * @var int|null
     */
    protected $effectifMax;
    /**
     * Tranche d'effectif de l'établissement, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen#:~:text=Cette%20variable%20correspond%20%C3%A0%20la,effectif%20salari%C3%A9%20de%20l'entreprise.).
     *
     * @var string|null
     */
    protected $trancheEffectif;
    /**
     * Année correspondante à la tranche d'effectif de l'établissement.
     *
     * @var int|null
     */
    protected $anneeEffectif;
    /**
     * Code NAF de l'établissement.
     *
     * @var string|null
     */
    protected $codeNaf;
    /**
     * Libellé du code NAF de l'établissement.
     *
     * @var string|null
     */
    protected $libelleCodeNaf;
    /**
     * @var string|null
     */
    protected $dateDeCreation;
    /**
     * Numéro de voie de l'établissement.
     *
     * @var int|null
     */
    protected $numeroVoie;
    /**
     * Indice de répétition de l'établissement.
     *
     * @var string|null
     */
    protected $indiceRepetition;
    /**
     * Type de voie de l'établissement.
     *
     * @var string|null
     */
    protected $typeVoie;
    /**
     * Libellé de la voie de l'établissement.
     *
     * @var string|null
     */
    protected $libelleVoie;
    /**
     * Complément d'adresse de l'établissement.
     *
     * @var string|null
     */
    protected $complementAdresse;
    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     *
     * @var string|null
     */
    protected $adresseLigne1;
    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     *
     * @var string|null
     */
    protected $adresseLigne2;
    /**
     * Date de fermeture de l'établissement.
     *
     * @var string|null
     */
    protected $dateCessation;
    /**
     * Enseigne de l'établissement.
     *
     * @var string|null
     */
    protected $enseigne;
    /**
     * Nom commercial de l'établissement.
     *
     * @var string|null
     */
    protected $nomCommercial;
    /**
     * @var EtablissementFicheDomiciliation|null
     */
    protected $domiciliation;
    /**
     * Liste des prédécesseurs de l'établissement.
     *
     * @var list<LienSuccession>|null
     */
    protected $predecesseurs;
    /**
     * Liste des successeurs de l'établissement.
     *
     * @var list<LienSuccession>|null
     */
    protected $successeurs;

    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * Numéro siret de l'établissement au format xxxxxxxxxxxxxx.
     */
    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    /**
     * Numéro siret de l'établissement au format xxx xxx xxx xxxxx.
     */
    public function getSiretFormate(): ?string
    {
        return $this->siretFormate;
    }

    /**
     * Numéro siret de l'établissement au format xxx xxx xxx xxxxx.
     */
    public function setSiretFormate(?string $siretFormate): self
    {
        $this->initialized['siretFormate'] = true;
        $this->siretFormate = $siretFormate;

        return $this;
    }

    /**
     * Si vrai, l'établissement est en diffusion partielle. Dans ce cas, tous les champs relatifs à son adresse - en dehors de la ville et du pays - sont à `null`.
     */
    public function getDiffusionPartielle(): ?bool
    {
        return $this->diffusionPartielle;
    }

    /**
     * Si vrai, l'établissement est en diffusion partielle. Dans ce cas, tous les champs relatifs à son adresse - en dehors de la ville et du pays - sont à `null`.
     */
    public function setDiffusionPartielle(?bool $diffusionPartielle): self
    {
        $this->initialized['diffusionPartielle'] = true;
        $this->diffusionPartielle = $diffusionPartielle;

        return $this;
    }

    /**
     * Numéro NIC de l'établissement.
     */
    public function getNic(): ?string
    {
        return $this->nic;
    }

    /**
     * Numéro NIC de l'établissement.
     */
    public function setNic(?string $nic): self
    {
        $this->initialized['nic'] = true;
        $this->nic = $nic;

        return $this;
    }

    /**
     * Code postal de l'établissement.
     */
    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    /**
     * Code postal de l'établissement.
     */
    public function setCodePostal(?string $codePostal): self
    {
        $this->initialized['codePostal'] = true;
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Ville de l'établissement.
     */
    public function getVille(): ?string
    {
        return $this->ville;
    }

    /**
     * Ville de l'établissement.
     */
    public function setVille(?string $ville): self
    {
        $this->initialized['ville'] = true;
        $this->ville = $ville;

        return $this;
    }

    /**
     * Pays de l'établissement.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays de l'établissement.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code du pays de l'établissement.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code du pays de l'établissement.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }

    /**
     * Latitude de l'établissement.
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * Latitude de l'établissement.
     */
    public function setLatitude(?float $latitude): self
    {
        $this->initialized['latitude'] = true;
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Longitude de l'établissement.
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * Longitude de l'établissement.
     */
    public function setLongitude(?float $longitude): self
    {
        $this->initialized['longitude'] = true;
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Vrai si l'établissement est cessé, faux si il est en activité.
     */
    public function getEtablissementCesse(): ?bool
    {
        return $this->etablissementCesse;
    }

    /**
     * Vrai si l'établissement est cessé, faux si il est en activité.
     */
    public function setEtablissementCesse(?bool $etablissementCesse): self
    {
        $this->initialized['etablissementCesse'] = true;
        $this->etablissementCesse = $etablissementCesse;

        return $this;
    }

    /**
     * Vrai si l'établissement est siège, faux s'il ne l'est pas.
     */
    public function getSiege(): ?bool
    {
        return $this->siege;
    }

    /**
     * Vrai si l'établissement est siège, faux s'il ne l'est pas.
     */
    public function setSiege(?bool $siege): self
    {
        $this->initialized['siege'] = true;
        $this->siege = $siege;

        return $this;
    }

    /**
     * Si vrai, l'établissement a au moins un employé.
     */
    public function getEtablissementEmployeur(): ?bool
    {
        return $this->etablissementEmployeur;
    }

    /**
     * Si vrai, l'établissement a au moins un employé.
     */
    public function setEtablissementEmployeur(?bool $etablissementEmployeur): self
    {
        $this->initialized['etablissementEmployeur'] = true;
        $this->etablissementEmployeur = $etablissementEmployeur;

        return $this;
    }

    /**
     * Tranche d'effectif de l'établissement.
     */
    public function getEffectif(): ?string
    {
        return $this->effectif;
    }

    /**
     * Tranche d'effectif de l'établissement.
     */
    public function setEffectif(?string $effectif): self
    {
        $this->initialized['effectif'] = true;
        $this->effectif = $effectif;

        return $this;
    }

    /**
     * Effectif minimal de l'établissement.
     */
    public function getEffectifMin(): ?int
    {
        return $this->effectifMin;
    }

    /**
     * Effectif minimal de l'établissement.
     */
    public function setEffectifMin(?int $effectifMin): self
    {
        $this->initialized['effectifMin'] = true;
        $this->effectifMin = $effectifMin;

        return $this;
    }

    /**
     * Effectif maximal de l'établissement.
     */
    public function getEffectifMax(): ?int
    {
        return $this->effectifMax;
    }

    /**
     * Effectif maximal de l'établissement.
     */
    public function setEffectifMax(?int $effectifMax): self
    {
        $this->initialized['effectifMax'] = true;
        $this->effectifMax = $effectifMax;

        return $this;
    }

    /**
     * Tranche d'effectif de l'établissement, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen#:~:text=Cette%20variable%20correspond%20%C3%A0%20la,effectif%20salari%C3%A9%20de%20l'entreprise.).
     */
    public function getTrancheEffectif(): ?string
    {
        return $this->trancheEffectif;
    }

    /**
     * Tranche d'effectif de l'établissement, selon la [nomenclature Sirene](https://www.sirene.fr/sirene/public/variable/tefen#:~:text=Cette%20variable%20correspond%20%C3%A0%20la,effectif%20salari%C3%A9%20de%20l'entreprise.).
     */
    public function setTrancheEffectif(?string $trancheEffectif): self
    {
        $this->initialized['trancheEffectif'] = true;
        $this->trancheEffectif = $trancheEffectif;

        return $this;
    }

    /**
     * Année correspondante à la tranche d'effectif de l'établissement.
     */
    public function getAnneeEffectif(): ?int
    {
        return $this->anneeEffectif;
    }

    /**
     * Année correspondante à la tranche d'effectif de l'établissement.
     */
    public function setAnneeEffectif(?int $anneeEffectif): self
    {
        $this->initialized['anneeEffectif'] = true;
        $this->anneeEffectif = $anneeEffectif;

        return $this;
    }

    /**
     * Code NAF de l'établissement.
     */
    public function getCodeNaf(): ?string
    {
        return $this->codeNaf;
    }

    /**
     * Code NAF de l'établissement.
     */
    public function setCodeNaf(?string $codeNaf): self
    {
        $this->initialized['codeNaf'] = true;
        $this->codeNaf = $codeNaf;

        return $this;
    }

    /**
     * Libellé du code NAF de l'établissement.
     */
    public function getLibelleCodeNaf(): ?string
    {
        return $this->libelleCodeNaf;
    }

    /**
     * Libellé du code NAF de l'établissement.
     */
    public function setLibelleCodeNaf(?string $libelleCodeNaf): self
    {
        $this->initialized['libelleCodeNaf'] = true;
        $this->libelleCodeNaf = $libelleCodeNaf;

        return $this;
    }

    public function getDateDeCreation(): ?string
    {
        return $this->dateDeCreation;
    }

    public function setDateDeCreation(?string $dateDeCreation): self
    {
        $this->initialized['dateDeCreation'] = true;
        $this->dateDeCreation = $dateDeCreation;

        return $this;
    }

    /**
     * Numéro de voie de l'établissement.
     */
    public function getNumeroVoie(): ?int
    {
        return $this->numeroVoie;
    }

    /**
     * Numéro de voie de l'établissement.
     */
    public function setNumeroVoie(?int $numeroVoie): self
    {
        $this->initialized['numeroVoie'] = true;
        $this->numeroVoie = $numeroVoie;

        return $this;
    }

    /**
     * Indice de répétition de l'établissement.
     */
    public function getIndiceRepetition(): ?string
    {
        return $this->indiceRepetition;
    }

    /**
     * Indice de répétition de l'établissement.
     */
    public function setIndiceRepetition(?string $indiceRepetition): self
    {
        $this->initialized['indiceRepetition'] = true;
        $this->indiceRepetition = $indiceRepetition;

        return $this;
    }

    /**
     * Type de voie de l'établissement.
     */
    public function getTypeVoie(): ?string
    {
        return $this->typeVoie;
    }

    /**
     * Type de voie de l'établissement.
     */
    public function setTypeVoie(?string $typeVoie): self
    {
        $this->initialized['typeVoie'] = true;
        $this->typeVoie = $typeVoie;

        return $this;
    }

    /**
     * Libellé de la voie de l'établissement.
     */
    public function getLibelleVoie(): ?string
    {
        return $this->libelleVoie;
    }

    /**
     * Libellé de la voie de l'établissement.
     */
    public function setLibelleVoie(?string $libelleVoie): self
    {
        $this->initialized['libelleVoie'] = true;
        $this->libelleVoie = $libelleVoie;

        return $this;
    }

    /**
     * Complément d'adresse de l'établissement.
     */
    public function getComplementAdresse(): ?string
    {
        return $this->complementAdresse;
    }

    /**
     * Complément d'adresse de l'établissement.
     */
    public function setComplementAdresse(?string $complementAdresse): self
    {
        $this->initialized['complementAdresse'] = true;
        $this->complementAdresse = $complementAdresse;

        return $this;
    }

    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     */
    public function getAdresseLigne1(): ?string
    {
        return $this->adresseLigne1;
    }

    /**
     * Première ligne de l'adresse de l'établissement. Correspond à l'ensemble des données numero_voie, indice_repetition, type_voie et libelle_voie.
     */
    public function setAdresseLigne1(?string $adresseLigne1): self
    {
        $this->initialized['adresseLigne1'] = true;
        $this->adresseLigne1 = $adresseLigne1;

        return $this;
    }

    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     */
    public function getAdresseLigne2(): ?string
    {
        return $this->adresseLigne2;
    }

    /**
     * Seconde ligne de l'adresse de l'établissement. Est égal à complement_adresse.
     */
    public function setAdresseLigne2(?string $adresseLigne2): self
    {
        $this->initialized['adresseLigne2'] = true;
        $this->adresseLigne2 = $adresseLigne2;

        return $this;
    }

    /**
     * Date de fermeture de l'établissement.
     */
    public function getDateCessation(): ?string
    {
        return $this->dateCessation;
    }

    /**
     * Date de fermeture de l'établissement.
     */
    public function setDateCessation(?string $dateCessation): self
    {
        $this->initialized['dateCessation'] = true;
        $this->dateCessation = $dateCessation;

        return $this;
    }

    /**
     * Enseigne de l'établissement.
     */
    public function getEnseigne(): ?string
    {
        return $this->enseigne;
    }

    /**
     * Enseigne de l'établissement.
     */
    public function setEnseigne(?string $enseigne): self
    {
        $this->initialized['enseigne'] = true;
        $this->enseigne = $enseigne;

        return $this;
    }

    /**
     * Nom commercial de l'établissement.
     */
    public function getNomCommercial(): ?string
    {
        return $this->nomCommercial;
    }

    /**
     * Nom commercial de l'établissement.
     */
    public function setNomCommercial(?string $nomCommercial): self
    {
        $this->initialized['nomCommercial'] = true;
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    public function getDomiciliation(): ?EtablissementFicheDomiciliation
    {
        return $this->domiciliation;
    }

    public function setDomiciliation(?EtablissementFicheDomiciliation $domiciliation): self
    {
        $this->initialized['domiciliation'] = true;
        $this->domiciliation = $domiciliation;

        return $this;
    }

    /**
     * Liste des prédécesseurs de l'établissement.
     *
     * @return list<LienSuccession>|null
     */
    public function getPredecesseurs(): ?array
    {
        return $this->predecesseurs;
    }

    /**
     * Liste des prédécesseurs de l'établissement.
     *
     * @param list<LienSuccession>|null $predecesseurs
     */
    public function setPredecesseurs(?array $predecesseurs): self
    {
        $this->initialized['predecesseurs'] = true;
        $this->predecesseurs = $predecesseurs;

        return $this;
    }

    /**
     * Liste des successeurs de l'établissement.
     *
     * @return list<LienSuccession>|null
     */
    public function getSuccesseurs(): ?array
    {
        return $this->successeurs;
    }

    /**
     * Liste des successeurs de l'établissement.
     *
     * @param list<LienSuccession>|null $successeurs
     */
    public function setSuccesseurs(?array $successeurs): self
    {
        $this->initialized['successeurs'] = true;
        $this->successeurs = $successeurs;

        return $this;
    }
}
