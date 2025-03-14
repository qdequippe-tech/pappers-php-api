<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFiche extends \ArrayObject
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
     * Le numéro SIREN de l'entreprise au format xxxxxxxxx.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Le numéro SIREN de l'entreprise au format xxx xxx xxx.
     *
     * @var string|null
     */
    protected $sirenFormate;
    /**
     * Indique si l'entreprise s'oppose à l'utilisation commerciale de ses données.
     *
     * @var bool|null
     */
    protected $oppositionUtilisationCommerciale;
    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique. Nullable si le paramètre `integrer_diffusions_partielles` est à vrai.
     *
     * @var string|null
     */
    protected $nomEntreprise;
    /**
     * Vrai en cas de personne morale, faux en cas de personne physique.
     *
     * @var bool|null
     */
    protected $personneMorale;
    /**
     * Dénomination de l'entreprise si personne morale.
     *
     * @var string|null
     */
    protected $denomination;
    /**
     * Nom si personne physique.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Prénom si personne physique.
     *
     * @var string|null
     */
    protected $prenom;
    /**
     * Sexe si personne physique. F pour féminin, M pour masculin.
     *
     * @var string|null
     */
    protected $sexe;
    /**
     * Code NAF de l'entreprise.
     *
     * @var string|null
     */
    protected $codeNaf;
    /**
     * Libellé du code NAF de l'entreprise.
     *
     * @var string|null
     */
    protected $libelleCodeNaf;
    /**
     * Domaine d'activité de l'entreprise.
     *
     * @var string|null
     */
    protected $domaineActivite;
    /**
     * Liste des conventions collectives de l'entreprise.
     *
     * @var list<EntrepriseBaseConventionsCollectivesItem>|null
     */
    protected $conventionsCollectives;
    /**
     * Date de création de l'entreprise au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateCreation;
    /**
     * Date de création de l'entreprise au format JJ/MM/AAAA.
     *
     * @var string|null
     */
    protected $dateCreationFormate;
    /**
     * Si vrai, l'entreprise n'est plus en activité. Sinon, elle est toujours en activité.
     *
     * @var bool|null
     */
    protected $entrepriseCessee;
    /**
     * Date de cessation de l'entreprise au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateCessation;
    /**
     * Si vrai, l'entreprise a au moins un employé.
     *
     * @var bool|null
     */
    protected $entrepriseEmployeuse;
    /**
     * Si vrai, l'entreprise est société à mission.
     *
     * @var bool|null
     */
    protected $societeAMission;
    /**
     * Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     *
     * @var string|null
     */
    protected $categorieJuridique;
    /**
     * Forme juridique de l'entreprise.
     *
     * @var string|null
     */
    protected $formeJuridique;
    /**
     * Si vrai, l'entreprise possède le statut de micro-entrepreneur.
     *
     * @var bool|null
     */
    protected $microEntreprise;
    /**
     * Forme d'exercice de l'activité principale.
     *
     * @var string|null
     */
    protected $formeExercice;
    /**
     * Tranche d'effectif de l'entreprise.
     *
     * @var string|null
     */
    protected $effectif;
    /**
     * Effectif minimal de l'entreprise.
     *
     * @var int|null
     */
    protected $effectifMin;
    /**
     * Effectif maximal de l'entreprise.
     *
     * @var int|null
     */
    protected $effectifMax;
    /**
     * Tranche d'effectif de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     *
     * @var string|null
     */
    protected $trancheEffectif;
    /**
     * Année de validité des variables effectif, effectif_min et effectif_max.
     *
     * @var int|null
     */
    protected $anneeEffectif;
    /**
     * Capital de l'entreprise.
     *
     * @var float|null
     */
    protected $capital;
    /**
     * Statut de l'entreprise au RCS.
     *
     * @var string|null
     */
    protected $statutRcs;
    /**
     * @var EtablissementFiche|null
     */
    protected $siege;
    /**
     * Le statut de diffusion de l'entreprise. Non diffusable correspond à une entreprise ayant demandé une diffusion partielle de ses données. Aucune information n'est alors disponible, sauf si vous utilisez le paramètre `integrer_diffusions_partielles`.
     *
     * @var bool|null
     */
    protected $diffusable;
    /**
     * Sigle de l'entreprise si personne morale.
     *
     * @var string|null
     */
    protected $sigle;
    /**
     * Objet social de l'entreprise.
     *
     * @var string|null
     */
    protected $objetSocial;
    /**
     * Capital l'entreprise au format xx xxx €.
     *
     * @var string|null
     */
    protected $capitalFormate;
    /**
     * Capital actuel de l'entreprise si variable.
     *
     * @var string|null
     */
    protected $capitalActuelSiVariable;
    /**
     * Devise de capital_formate et capital_actuel_si_variable.
     *
     * @var string|null
     */
    protected $deviseCapital;
    /**
     * Numéro RCS de l'entreprise.
     *
     * @var string|null
     */
    protected $numeroRcs;
    /**
     * Date de clôture d'exercice de l'entreprise.
     *
     * @var string|null
     */
    protected $dateClotureExercice;
    /**
     * Date de clôture d'exercice exceptionnel de l'entreprise.
     *
     * @var string|null
     */
    protected $dateClotureExerciceExceptionnelle;
    /**
     * Date de clôture d'exercice exceptionnel formatée de l'entreprise.
     *
     * @var string|null
     */
    protected $dateClotureExerciceExceptionnelleFormate;
    /**
     * Prochaine date de clôture d'exercice de l'entreprise.
     *
     * @var string|null
     */
    protected $prochaineDateClotureExercice;
    /**
     * Prochaine date de clôture d'exercice formatée de l'entreprise.
     *
     * @var string|null
     */
    protected $prochaineDateClotureExerciceFormate;
    /**
     * Vrai si l'entreprise est une entreprise de l'économie sociale et solidaire.
     *
     * @var bool|null
     */
    protected $economieSocialeSolidaire;
    /**
     * Durée de la personne morale.
     *
     * @var string|null
     */
    protected $dureePersonneMorale;
    /**
     * Date de dernier traitement de l'entreprise.
     *
     * @var \DateTime|null
     */
    protected $dernierTraitement;
    /**
     * Dernière mise à jour de la base de donnée sirène au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $derniereMiseAJourSirene;
    /**
     * Dernière mise à jour de la base de donnée RCS au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $derniereMiseAJourRcs;
    /**
     * Greffe RCS de l'entreprise.
     *
     * @var string|null
     */
    protected $greffe;
    /**
     * Code greffe RCS de l'entreprise.
     *
     * @var string|null
     */
    protected $codeGreffe;
    /**
     * Date d'immatriculation de l'entreprise au RCS.
     *
     * @var string|null
     */
    protected $dateImmatriculationRcs;
    /**
     * Date de la première immatriculation de l'entreprise au RCS.
     *
     * @var string|null
     */
    protected $datePremiereImmatriculationRcs;
    /**
     * Date de début d'activité de l'entreprise.
     *
     * @var string|null
     */
    protected $dateDebutActivite;
    /**
     * Date de début d'activité de l'entreprise.
     *
     * @var string|null
     */
    protected $dateDebutPremiereActivite;
    /**
     * Date de radiation de l'entreprise au RCS.
     *
     * @var string|null
     */
    protected $dateRadiationRcs;
    /**
     * Statut de l'entreprise au RNE.
     *
     * @var string|null
     */
    protected $statutRne;
    /**
     * Date d'immatriculation de l'entreprise au RNE.
     *
     * @var string|null
     */
    protected $dateImmatriculationRne;
    /**
     * Date de radiation de l'entreprise au RNE.
     *
     * @var string|null
     */
    protected $dateRadiationRne;
    /**
     * Numéro de TVA intracommunautaire de l'entreprise.
     *
     * @var string|null
     */
    protected $numeroTvaIntracommunautaire;
    /**
     * Présent uniquement si le paramètre validite_tva_intracommunautaire a été mis à vrai.
     *
     * Si vrai, le numéro de TVA intracommunautaire est valide. Si faux, il est invalide. Si null, la validité n'a pas pu être vérifiée.
     *
     * @var bool|null
     */
    protected $validiteTvaIntracommunautaire;
    /**
     * Si vrai, l'entreprise est à associé unique (notamment pour les SASU et les EURL).
     *
     * @var bool|null
     */
    protected $associeUnique;
    /**
     * Liste des établissements de l'entreprise. (uniquement si le paramètre `siren` est utilisé).
     *
     * @var list<EtablissementFiche>|null
     */
    protected $etablissements;
    /**
     * @var EntrepriseFicheetablissement|null
     */
    protected $etablissement;
    /**
     * Liste des finances de l'entreprise.
     *
     * @var list<EntrepriseFichefinancesItem>|null
     */
    protected $finances;
    /**
     * Liste des représentants de l'entreprise.
     *
     * @var list<RepresentantEntreprise>|null
     */
    protected $representants;
    /**
     * Liste des bénéficiaires effectifs de l'entreprise (si disponibles).
     *
     * @var list<EntrepriseFichebeneficiairesEffectifsItem>|null
     */
    protected $beneficiairesEffectifs;
    /**
     * Liste des actes de l'entreprise.
     *
     * @var list<EntrepriseFichedepotsActesItem>|null
     */
    protected $depotsActes;
    /**
     * Liste des comptes de l'entreprise.
     *
     * @var list<EntrepriseFichecomptesItem>|null
     */
    protected $comptes;
    /**
     * Liste des publications au Bodacc de l'entreprise.
     *
     * @var list<Bodacc>|null
     */
    protected $publicationsBodacc;
    /**
     * Liste des procédures collectives de l'entreprise.
     *
     * @var list<EntrepriseFicheproceduresCollectivesItem>|null
     */
    protected $proceduresCollectives;
    /**
     * Vrai si l'entreprise a des procédures collectives (en cours ou terminées), faux sinon.
     *
     * @var bool|null
     */
    protected $procedureCollectiveExiste;
    /**
     * Vrai si l'entreprise a des procédures collectives en cours, faux sinon.
     *
     * @var bool|null
     */
    protected $procedureCollectiveEnCours;
    /**
     * Liste des statuts de l'entreprise.
     *
     * @var EntrepriseFichederniersStatuts|null
     */
    protected $derniersStatuts;
    /**
     * Extrait d'immatriculation de l'entreprise.
     *
     * @var EntrepriseFicheextraitImmatriculation|null
     */
    protected $extraitImmatriculation;
    /**
     * Informations sur l'immatriculation de l'entreprise au Répertoire des Métiers.
     *
     * @var EntrepriseFichernm|null
     */
    protected $rnm;
    /**
     * Liste des marques françaises déposées par l'entreprise. Uniquement présent si le paramètre "marques" a été mis à vrai.
     *
     * @var list<EntrepriseFichemarquesItem>|null
     */
    protected $marques;
    /**
     * Association liée à l'entreprise.
     *
     * @var Association|null
     */
    protected $association;
    /**
     * Liste des labels de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var list<Labels>|null
     */
    protected $labels;
    /**
     * Liste des sites internet de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var list<string>|null
     */
    protected $sitesInternet;
    /**
     * Numéro de téléphone de l'entreprise au format 0123456789. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var string|null
     */
    protected $telephone;
    /**
     * Adresse email de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Score non financier de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var ScoringNonFinancier|null
     */
    protected $scoringNonFinancier;
    /**
     * Score financier de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var ScoringFinancier|null
     */
    protected $scoringFinancier;
    /**
     * Catégorie de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @var string|null
     */
    protected $categorieEntreprise;
    /**
     * Année de correspondance de la catégorie de l'entreprise. Uniquement présent si le champ supplémentaire `categorie_entreprise` est demandé.
     *
     * @var int|null
     */
    protected $anneeCategorieEntreprise;

    /**
     * Le numéro SIREN de l'entreprise au format xxxxxxxxx.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * Le numéro SIREN de l'entreprise au format xxxxxxxxx.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Le numéro SIREN de l'entreprise au format xxx xxx xxx.
     */
    public function getSirenFormate(): ?string
    {
        return $this->sirenFormate;
    }

    /**
     * Le numéro SIREN de l'entreprise au format xxx xxx xxx.
     */
    public function setSirenFormate(?string $sirenFormate): self
    {
        $this->initialized['sirenFormate'] = true;
        $this->sirenFormate = $sirenFormate;

        return $this;
    }

    /**
     * Indique si l'entreprise s'oppose à l'utilisation commerciale de ses données.
     */
    public function getOppositionUtilisationCommerciale(): ?bool
    {
        return $this->oppositionUtilisationCommerciale;
    }

    /**
     * Indique si l'entreprise s'oppose à l'utilisation commerciale de ses données.
     */
    public function setOppositionUtilisationCommerciale(?bool $oppositionUtilisationCommerciale): self
    {
        $this->initialized['oppositionUtilisationCommerciale'] = true;
        $this->oppositionUtilisationCommerciale = $oppositionUtilisationCommerciale;

        return $this;
    }

    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique. Nullable si le paramètre `integrer_diffusions_partielles` est à vrai.
     */
    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique. Nullable si le paramètre `integrer_diffusions_partielles` est à vrai.
     */
    public function setNomEntreprise(?string $nomEntreprise): self
    {
        $this->initialized['nomEntreprise'] = true;
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Vrai en cas de personne morale, faux en cas de personne physique.
     */
    public function getPersonneMorale(): ?bool
    {
        return $this->personneMorale;
    }

    /**
     * Vrai en cas de personne morale, faux en cas de personne physique.
     */
    public function setPersonneMorale(?bool $personneMorale): self
    {
        $this->initialized['personneMorale'] = true;
        $this->personneMorale = $personneMorale;

        return $this;
    }

    /**
     * Dénomination de l'entreprise si personne morale.
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination de l'entreprise si personne morale.
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Nom si personne physique.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom si personne physique.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Prénom si personne physique.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Prénom si personne physique.
     */
    public function setPrenom(?string $prenom): self
    {
        $this->initialized['prenom'] = true;
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Sexe si personne physique. F pour féminin, M pour masculin.
     */
    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    /**
     * Sexe si personne physique. F pour féminin, M pour masculin.
     */
    public function setSexe(?string $sexe): self
    {
        $this->initialized['sexe'] = true;
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Code NAF de l'entreprise.
     */
    public function getCodeNaf(): ?string
    {
        return $this->codeNaf;
    }

    /**
     * Code NAF de l'entreprise.
     */
    public function setCodeNaf(?string $codeNaf): self
    {
        $this->initialized['codeNaf'] = true;
        $this->codeNaf = $codeNaf;

        return $this;
    }

    /**
     * Libellé du code NAF de l'entreprise.
     */
    public function getLibelleCodeNaf(): ?string
    {
        return $this->libelleCodeNaf;
    }

    /**
     * Libellé du code NAF de l'entreprise.
     */
    public function setLibelleCodeNaf(?string $libelleCodeNaf): self
    {
        $this->initialized['libelleCodeNaf'] = true;
        $this->libelleCodeNaf = $libelleCodeNaf;

        return $this;
    }

    /**
     * Domaine d'activité de l'entreprise.
     */
    public function getDomaineActivite(): ?string
    {
        return $this->domaineActivite;
    }

    /**
     * Domaine d'activité de l'entreprise.
     */
    public function setDomaineActivite(?string $domaineActivite): self
    {
        $this->initialized['domaineActivite'] = true;
        $this->domaineActivite = $domaineActivite;

        return $this;
    }

    /**
     * Liste des conventions collectives de l'entreprise.
     *
     * @return list<EntrepriseBaseConventionsCollectivesItem>|null
     */
    public function getConventionsCollectives(): ?array
    {
        return $this->conventionsCollectives;
    }

    /**
     * Liste des conventions collectives de l'entreprise.
     *
     * @param list<EntrepriseBaseConventionsCollectivesItem>|null $conventionsCollectives
     */
    public function setConventionsCollectives(?array $conventionsCollectives): self
    {
        $this->initialized['conventionsCollectives'] = true;
        $this->conventionsCollectives = $conventionsCollectives;

        return $this;
    }

    /**
     * Date de création de l'entreprise au format AAAA-MM-JJ.
     */
    public function getDateCreation(): ?\DateTime
    {
        return $this->dateCreation;
    }

    /**
     * Date de création de l'entreprise au format AAAA-MM-JJ.
     */
    public function setDateCreation(?\DateTime $dateCreation): self
    {
        $this->initialized['dateCreation'] = true;
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Date de création de l'entreprise au format JJ/MM/AAAA.
     */
    public function getDateCreationFormate(): ?string
    {
        return $this->dateCreationFormate;
    }

    /**
     * Date de création de l'entreprise au format JJ/MM/AAAA.
     */
    public function setDateCreationFormate(?string $dateCreationFormate): self
    {
        $this->initialized['dateCreationFormate'] = true;
        $this->dateCreationFormate = $dateCreationFormate;

        return $this;
    }

    /**
     * Si vrai, l'entreprise n'est plus en activité. Sinon, elle est toujours en activité.
     */
    public function getEntrepriseCessee(): ?bool
    {
        return $this->entrepriseCessee;
    }

    /**
     * Si vrai, l'entreprise n'est plus en activité. Sinon, elle est toujours en activité.
     */
    public function setEntrepriseCessee(?bool $entrepriseCessee): self
    {
        $this->initialized['entrepriseCessee'] = true;
        $this->entrepriseCessee = $entrepriseCessee;

        return $this;
    }

    /**
     * Date de cessation de l'entreprise au format AAAA-MM-JJ.
     */
    public function getDateCessation(): ?string
    {
        return $this->dateCessation;
    }

    /**
     * Date de cessation de l'entreprise au format AAAA-MM-JJ.
     */
    public function setDateCessation(?string $dateCessation): self
    {
        $this->initialized['dateCessation'] = true;
        $this->dateCessation = $dateCessation;

        return $this;
    }

    /**
     * Si vrai, l'entreprise a au moins un employé.
     */
    public function getEntrepriseEmployeuse(): ?bool
    {
        return $this->entrepriseEmployeuse;
    }

    /**
     * Si vrai, l'entreprise a au moins un employé.
     */
    public function setEntrepriseEmployeuse(?bool $entrepriseEmployeuse): self
    {
        $this->initialized['entrepriseEmployeuse'] = true;
        $this->entrepriseEmployeuse = $entrepriseEmployeuse;

        return $this;
    }

    /**
     * Si vrai, l'entreprise est société à mission.
     */
    public function getSocieteAMission(): ?bool
    {
        return $this->societeAMission;
    }

    /**
     * Si vrai, l'entreprise est société à mission.
     */
    public function setSocieteAMission(?bool $societeAMission): self
    {
        $this->initialized['societeAMission'] = true;
        $this->societeAMission = $societeAMission;

        return $this;
    }

    /**
     * Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     */
    public function getCategorieJuridique(): ?string
    {
        return $this->categorieJuridique;
    }

    /**
     * Catégorie juridique de l'entreprise, selon la [nomenclature Insee](https://www.insee.fr/fr/information/2028129).
     **Note** : Le code correspond à celui de l'INSEE, à l'exception des SASU qui auront comme code 5720 et les EURL qui auront comme code 5498.
     */
    public function setCategorieJuridique(?string $categorieJuridique): self
    {
        $this->initialized['categorieJuridique'] = true;
        $this->categorieJuridique = $categorieJuridique;

        return $this;
    }

    /**
     * Forme juridique de l'entreprise.
     */
    public function getFormeJuridique(): ?string
    {
        return $this->formeJuridique;
    }

    /**
     * Forme juridique de l'entreprise.
     */
    public function setFormeJuridique(?string $formeJuridique): self
    {
        $this->initialized['formeJuridique'] = true;
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    /**
     * Si vrai, l'entreprise possède le statut de micro-entrepreneur.
     */
    public function getMicroEntreprise(): ?bool
    {
        return $this->microEntreprise;
    }

    /**
     * Si vrai, l'entreprise possède le statut de micro-entrepreneur.
     */
    public function setMicroEntreprise(?bool $microEntreprise): self
    {
        $this->initialized['microEntreprise'] = true;
        $this->microEntreprise = $microEntreprise;

        return $this;
    }

    /**
     * Forme d'exercice de l'activité principale.
     */
    public function getFormeExercice(): ?string
    {
        return $this->formeExercice;
    }

    /**
     * Forme d'exercice de l'activité principale.
     */
    public function setFormeExercice(?string $formeExercice): self
    {
        $this->initialized['formeExercice'] = true;
        $this->formeExercice = $formeExercice;

        return $this;
    }

    /**
     * Tranche d'effectif de l'entreprise.
     */
    public function getEffectif(): ?string
    {
        return $this->effectif;
    }

    /**
     * Tranche d'effectif de l'entreprise.
     */
    public function setEffectif(?string $effectif): self
    {
        $this->initialized['effectif'] = true;
        $this->effectif = $effectif;

        return $this;
    }

    /**
     * Effectif minimal de l'entreprise.
     */
    public function getEffectifMin(): ?int
    {
        return $this->effectifMin;
    }

    /**
     * Effectif minimal de l'entreprise.
     */
    public function setEffectifMin(?int $effectifMin): self
    {
        $this->initialized['effectifMin'] = true;
        $this->effectifMin = $effectifMin;

        return $this;
    }

    /**
     * Effectif maximal de l'entreprise.
     */
    public function getEffectifMax(): ?int
    {
        return $this->effectifMax;
    }

    /**
     * Effectif maximal de l'entreprise.
     */
    public function setEffectifMax(?int $effectifMax): self
    {
        $this->initialized['effectifMax'] = true;
        $this->effectifMax = $effectifMax;

        return $this;
    }

    /**
     * Tranche d'effectif de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     */
    public function getTrancheEffectif(): ?string
    {
        return $this->trancheEffectif;
    }

    /**
     * Tranche d'effectif de l'entreprise, selon la [nomenclature Sirene](https://www.sirene.fr/static-resources/documentation/v_sommaire_311.htm#73).
     */
    public function setTrancheEffectif(?string $trancheEffectif): self
    {
        $this->initialized['trancheEffectif'] = true;
        $this->trancheEffectif = $trancheEffectif;

        return $this;
    }

    /**
     * Année de validité des variables effectif, effectif_min et effectif_max.
     */
    public function getAnneeEffectif(): ?int
    {
        return $this->anneeEffectif;
    }

    /**
     * Année de validité des variables effectif, effectif_min et effectif_max.
     */
    public function setAnneeEffectif(?int $anneeEffectif): self
    {
        $this->initialized['anneeEffectif'] = true;
        $this->anneeEffectif = $anneeEffectif;

        return $this;
    }

    /**
     * Capital de l'entreprise.
     */
    public function getCapital(): ?float
    {
        return $this->capital;
    }

    /**
     * Capital de l'entreprise.
     */
    public function setCapital(?float $capital): self
    {
        $this->initialized['capital'] = true;
        $this->capital = $capital;

        return $this;
    }

    /**
     * Statut de l'entreprise au RCS.
     */
    public function getStatutRcs(): ?string
    {
        return $this->statutRcs;
    }

    /**
     * Statut de l'entreprise au RCS.
     */
    public function setStatutRcs(?string $statutRcs): self
    {
        $this->initialized['statutRcs'] = true;
        $this->statutRcs = $statutRcs;

        return $this;
    }

    public function getSiege(): ?EtablissementFiche
    {
        return $this->siege;
    }

    public function setSiege(?EtablissementFiche $siege): self
    {
        $this->initialized['siege'] = true;
        $this->siege = $siege;

        return $this;
    }

    /**
     * Le statut de diffusion de l'entreprise. Non diffusable correspond à une entreprise ayant demandé une diffusion partielle de ses données. Aucune information n'est alors disponible, sauf si vous utilisez le paramètre `integrer_diffusions_partielles`.
     */
    public function getDiffusable(): ?bool
    {
        return $this->diffusable;
    }

    /**
     * Le statut de diffusion de l'entreprise. Non diffusable correspond à une entreprise ayant demandé une diffusion partielle de ses données. Aucune information n'est alors disponible, sauf si vous utilisez le paramètre `integrer_diffusions_partielles`.
     */
    public function setDiffusable(?bool $diffusable): self
    {
        $this->initialized['diffusable'] = true;
        $this->diffusable = $diffusable;

        return $this;
    }

    /**
     * Sigle de l'entreprise si personne morale.
     */
    public function getSigle(): ?string
    {
        return $this->sigle;
    }

    /**
     * Sigle de l'entreprise si personne morale.
     */
    public function setSigle(?string $sigle): self
    {
        $this->initialized['sigle'] = true;
        $this->sigle = $sigle;

        return $this;
    }

    /**
     * Objet social de l'entreprise.
     */
    public function getObjetSocial(): ?string
    {
        return $this->objetSocial;
    }

    /**
     * Objet social de l'entreprise.
     */
    public function setObjetSocial(?string $objetSocial): self
    {
        $this->initialized['objetSocial'] = true;
        $this->objetSocial = $objetSocial;

        return $this;
    }

    /**
     * Capital l'entreprise au format xx xxx €.
     */
    public function getCapitalFormate(): ?string
    {
        return $this->capitalFormate;
    }

    /**
     * Capital l'entreprise au format xx xxx €.
     */
    public function setCapitalFormate(?string $capitalFormate): self
    {
        $this->initialized['capitalFormate'] = true;
        $this->capitalFormate = $capitalFormate;

        return $this;
    }

    /**
     * Capital actuel de l'entreprise si variable.
     */
    public function getCapitalActuelSiVariable(): ?string
    {
        return $this->capitalActuelSiVariable;
    }

    /**
     * Capital actuel de l'entreprise si variable.
     */
    public function setCapitalActuelSiVariable(?string $capitalActuelSiVariable): self
    {
        $this->initialized['capitalActuelSiVariable'] = true;
        $this->capitalActuelSiVariable = $capitalActuelSiVariable;

        return $this;
    }

    /**
     * Devise de capital_formate et capital_actuel_si_variable.
     */
    public function getDeviseCapital(): ?string
    {
        return $this->deviseCapital;
    }

    /**
     * Devise de capital_formate et capital_actuel_si_variable.
     */
    public function setDeviseCapital(?string $deviseCapital): self
    {
        $this->initialized['deviseCapital'] = true;
        $this->deviseCapital = $deviseCapital;

        return $this;
    }

    /**
     * Numéro RCS de l'entreprise.
     */
    public function getNumeroRcs(): ?string
    {
        return $this->numeroRcs;
    }

    /**
     * Numéro RCS de l'entreprise.
     */
    public function setNumeroRcs(?string $numeroRcs): self
    {
        $this->initialized['numeroRcs'] = true;
        $this->numeroRcs = $numeroRcs;

        return $this;
    }

    /**
     * Date de clôture d'exercice de l'entreprise.
     */
    public function getDateClotureExercice(): ?string
    {
        return $this->dateClotureExercice;
    }

    /**
     * Date de clôture d'exercice de l'entreprise.
     */
    public function setDateClotureExercice(?string $dateClotureExercice): self
    {
        $this->initialized['dateClotureExercice'] = true;
        $this->dateClotureExercice = $dateClotureExercice;

        return $this;
    }

    /**
     * Date de clôture d'exercice exceptionnel de l'entreprise.
     */
    public function getDateClotureExerciceExceptionnelle(): ?string
    {
        return $this->dateClotureExerciceExceptionnelle;
    }

    /**
     * Date de clôture d'exercice exceptionnel de l'entreprise.
     */
    public function setDateClotureExerciceExceptionnelle(?string $dateClotureExerciceExceptionnelle): self
    {
        $this->initialized['dateClotureExerciceExceptionnelle'] = true;
        $this->dateClotureExerciceExceptionnelle = $dateClotureExerciceExceptionnelle;

        return $this;
    }

    /**
     * Date de clôture d'exercice exceptionnel formatée de l'entreprise.
     */
    public function getDateClotureExerciceExceptionnelleFormate(): ?string
    {
        return $this->dateClotureExerciceExceptionnelleFormate;
    }

    /**
     * Date de clôture d'exercice exceptionnel formatée de l'entreprise.
     */
    public function setDateClotureExerciceExceptionnelleFormate(?string $dateClotureExerciceExceptionnelleFormate): self
    {
        $this->initialized['dateClotureExerciceExceptionnelleFormate'] = true;
        $this->dateClotureExerciceExceptionnelleFormate = $dateClotureExerciceExceptionnelleFormate;

        return $this;
    }

    /**
     * Prochaine date de clôture d'exercice de l'entreprise.
     */
    public function getProchaineDateClotureExercice(): ?string
    {
        return $this->prochaineDateClotureExercice;
    }

    /**
     * Prochaine date de clôture d'exercice de l'entreprise.
     */
    public function setProchaineDateClotureExercice(?string $prochaineDateClotureExercice): self
    {
        $this->initialized['prochaineDateClotureExercice'] = true;
        $this->prochaineDateClotureExercice = $prochaineDateClotureExercice;

        return $this;
    }

    /**
     * Prochaine date de clôture d'exercice formatée de l'entreprise.
     */
    public function getProchaineDateClotureExerciceFormate(): ?string
    {
        return $this->prochaineDateClotureExerciceFormate;
    }

    /**
     * Prochaine date de clôture d'exercice formatée de l'entreprise.
     */
    public function setProchaineDateClotureExerciceFormate(?string $prochaineDateClotureExerciceFormate): self
    {
        $this->initialized['prochaineDateClotureExerciceFormate'] = true;
        $this->prochaineDateClotureExerciceFormate = $prochaineDateClotureExerciceFormate;

        return $this;
    }

    /**
     * Vrai si l'entreprise est une entreprise de l'économie sociale et solidaire.
     */
    public function getEconomieSocialeSolidaire(): ?bool
    {
        return $this->economieSocialeSolidaire;
    }

    /**
     * Vrai si l'entreprise est une entreprise de l'économie sociale et solidaire.
     */
    public function setEconomieSocialeSolidaire(?bool $economieSocialeSolidaire): self
    {
        $this->initialized['economieSocialeSolidaire'] = true;
        $this->economieSocialeSolidaire = $economieSocialeSolidaire;

        return $this;
    }

    /**
     * Durée de la personne morale.
     */
    public function getDureePersonneMorale(): ?string
    {
        return $this->dureePersonneMorale;
    }

    /**
     * Durée de la personne morale.
     */
    public function setDureePersonneMorale(?string $dureePersonneMorale): self
    {
        $this->initialized['dureePersonneMorale'] = true;
        $this->dureePersonneMorale = $dureePersonneMorale;

        return $this;
    }

    /**
     * Date de dernier traitement de l'entreprise.
     */
    public function getDernierTraitement(): ?\DateTime
    {
        return $this->dernierTraitement;
    }

    /**
     * Date de dernier traitement de l'entreprise.
     */
    public function setDernierTraitement(?\DateTime $dernierTraitement): self
    {
        $this->initialized['dernierTraitement'] = true;
        $this->dernierTraitement = $dernierTraitement;

        return $this;
    }

    /**
     * Dernière mise à jour de la base de donnée sirène au format AAAA-MM-JJ.
     */
    public function getDerniereMiseAJourSirene(): ?\DateTime
    {
        return $this->derniereMiseAJourSirene;
    }

    /**
     * Dernière mise à jour de la base de donnée sirène au format AAAA-MM-JJ.
     */
    public function setDerniereMiseAJourSirene(?\DateTime $derniereMiseAJourSirene): self
    {
        $this->initialized['derniereMiseAJourSirene'] = true;
        $this->derniereMiseAJourSirene = $derniereMiseAJourSirene;

        return $this;
    }

    /**
     * Dernière mise à jour de la base de donnée RCS au format AAAA-MM-JJ.
     */
    public function getDerniereMiseAJourRcs(): ?\DateTime
    {
        return $this->derniereMiseAJourRcs;
    }

    /**
     * Dernière mise à jour de la base de donnée RCS au format AAAA-MM-JJ.
     */
    public function setDerniereMiseAJourRcs(?\DateTime $derniereMiseAJourRcs): self
    {
        $this->initialized['derniereMiseAJourRcs'] = true;
        $this->derniereMiseAJourRcs = $derniereMiseAJourRcs;

        return $this;
    }

    /**
     * Greffe RCS de l'entreprise.
     */
    public function getGreffe(): ?string
    {
        return $this->greffe;
    }

    /**
     * Greffe RCS de l'entreprise.
     */
    public function setGreffe(?string $greffe): self
    {
        $this->initialized['greffe'] = true;
        $this->greffe = $greffe;

        return $this;
    }

    /**
     * Code greffe RCS de l'entreprise.
     */
    public function getCodeGreffe(): ?string
    {
        return $this->codeGreffe;
    }

    /**
     * Code greffe RCS de l'entreprise.
     */
    public function setCodeGreffe(?string $codeGreffe): self
    {
        $this->initialized['codeGreffe'] = true;
        $this->codeGreffe = $codeGreffe;

        return $this;
    }

    /**
     * Date d'immatriculation de l'entreprise au RCS.
     */
    public function getDateImmatriculationRcs(): ?string
    {
        return $this->dateImmatriculationRcs;
    }

    /**
     * Date d'immatriculation de l'entreprise au RCS.
     */
    public function setDateImmatriculationRcs(?string $dateImmatriculationRcs): self
    {
        $this->initialized['dateImmatriculationRcs'] = true;
        $this->dateImmatriculationRcs = $dateImmatriculationRcs;

        return $this;
    }

    /**
     * Date de la première immatriculation de l'entreprise au RCS.
     */
    public function getDatePremiereImmatriculationRcs(): ?string
    {
        return $this->datePremiereImmatriculationRcs;
    }

    /**
     * Date de la première immatriculation de l'entreprise au RCS.
     */
    public function setDatePremiereImmatriculationRcs(?string $datePremiereImmatriculationRcs): self
    {
        $this->initialized['datePremiereImmatriculationRcs'] = true;
        $this->datePremiereImmatriculationRcs = $datePremiereImmatriculationRcs;

        return $this;
    }

    /**
     * Date de début d'activité de l'entreprise.
     */
    public function getDateDebutActivite(): ?string
    {
        return $this->dateDebutActivite;
    }

    /**
     * Date de début d'activité de l'entreprise.
     */
    public function setDateDebutActivite(?string $dateDebutActivite): self
    {
        $this->initialized['dateDebutActivite'] = true;
        $this->dateDebutActivite = $dateDebutActivite;

        return $this;
    }

    /**
     * Date de début d'activité de l'entreprise.
     */
    public function getDateDebutPremiereActivite(): ?string
    {
        return $this->dateDebutPremiereActivite;
    }

    /**
     * Date de début d'activité de l'entreprise.
     */
    public function setDateDebutPremiereActivite(?string $dateDebutPremiereActivite): self
    {
        $this->initialized['dateDebutPremiereActivite'] = true;
        $this->dateDebutPremiereActivite = $dateDebutPremiereActivite;

        return $this;
    }

    /**
     * Date de radiation de l'entreprise au RCS.
     */
    public function getDateRadiationRcs(): ?string
    {
        return $this->dateRadiationRcs;
    }

    /**
     * Date de radiation de l'entreprise au RCS.
     */
    public function setDateRadiationRcs(?string $dateRadiationRcs): self
    {
        $this->initialized['dateRadiationRcs'] = true;
        $this->dateRadiationRcs = $dateRadiationRcs;

        return $this;
    }

    /**
     * Statut de l'entreprise au RNE.
     */
    public function getStatutRne(): ?string
    {
        return $this->statutRne;
    }

    /**
     * Statut de l'entreprise au RNE.
     */
    public function setStatutRne(?string $statutRne): self
    {
        $this->initialized['statutRne'] = true;
        $this->statutRne = $statutRne;

        return $this;
    }

    /**
     * Date d'immatriculation de l'entreprise au RNE.
     */
    public function getDateImmatriculationRne(): ?string
    {
        return $this->dateImmatriculationRne;
    }

    /**
     * Date d'immatriculation de l'entreprise au RNE.
     */
    public function setDateImmatriculationRne(?string $dateImmatriculationRne): self
    {
        $this->initialized['dateImmatriculationRne'] = true;
        $this->dateImmatriculationRne = $dateImmatriculationRne;

        return $this;
    }

    /**
     * Date de radiation de l'entreprise au RNE.
     */
    public function getDateRadiationRne(): ?string
    {
        return $this->dateRadiationRne;
    }

    /**
     * Date de radiation de l'entreprise au RNE.
     */
    public function setDateRadiationRne(?string $dateRadiationRne): self
    {
        $this->initialized['dateRadiationRne'] = true;
        $this->dateRadiationRne = $dateRadiationRne;

        return $this;
    }

    /**
     * Numéro de TVA intracommunautaire de l'entreprise.
     */
    public function getNumeroTvaIntracommunautaire(): ?string
    {
        return $this->numeroTvaIntracommunautaire;
    }

    /**
     * Numéro de TVA intracommunautaire de l'entreprise.
     */
    public function setNumeroTvaIntracommunautaire(?string $numeroTvaIntracommunautaire): self
    {
        $this->initialized['numeroTvaIntracommunautaire'] = true;
        $this->numeroTvaIntracommunautaire = $numeroTvaIntracommunautaire;

        return $this;
    }

    /**
     * Présent uniquement si le paramètre validite_tva_intracommunautaire a été mis à vrai.
     *
     * Si vrai, le numéro de TVA intracommunautaire est valide. Si faux, il est invalide. Si null, la validité n'a pas pu être vérifiée.
     */
    public function getValiditeTvaIntracommunautaire(): ?bool
    {
        return $this->validiteTvaIntracommunautaire;
    }

    /**
     * Présent uniquement si le paramètre validite_tva_intracommunautaire a été mis à vrai.
     *
     * Si vrai, le numéro de TVA intracommunautaire est valide. Si faux, il est invalide. Si null, la validité n'a pas pu être vérifiée.
     */
    public function setValiditeTvaIntracommunautaire(?bool $validiteTvaIntracommunautaire): self
    {
        $this->initialized['validiteTvaIntracommunautaire'] = true;
        $this->validiteTvaIntracommunautaire = $validiteTvaIntracommunautaire;

        return $this;
    }

    /**
     * Si vrai, l'entreprise est à associé unique (notamment pour les SASU et les EURL).
     */
    public function getAssocieUnique(): ?bool
    {
        return $this->associeUnique;
    }

    /**
     * Si vrai, l'entreprise est à associé unique (notamment pour les SASU et les EURL).
     */
    public function setAssocieUnique(?bool $associeUnique): self
    {
        $this->initialized['associeUnique'] = true;
        $this->associeUnique = $associeUnique;

        return $this;
    }

    /**
     * Liste des établissements de l'entreprise. (uniquement si le paramètre `siren` est utilisé).
     *
     * @return list<EtablissementFiche>|null
     */
    public function getEtablissements(): ?array
    {
        return $this->etablissements;
    }

    /**
     * Liste des établissements de l'entreprise. (uniquement si le paramètre `siren` est utilisé).
     *
     * @param list<EtablissementFiche>|null $etablissements
     */
    public function setEtablissements(?array $etablissements): self
    {
        $this->initialized['etablissements'] = true;
        $this->etablissements = $etablissements;

        return $this;
    }

    public function getEtablissement(): ?EntrepriseFicheetablissement
    {
        return $this->etablissement;
    }

    public function setEtablissement(?EntrepriseFicheetablissement $etablissement): self
    {
        $this->initialized['etablissement'] = true;
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Liste des finances de l'entreprise.
     *
     * @return list<EntrepriseFichefinancesItem>|null
     */
    public function getFinances(): ?array
    {
        return $this->finances;
    }

    /**
     * Liste des finances de l'entreprise.
     *
     * @param list<EntrepriseFichefinancesItem>|null $finances
     */
    public function setFinances(?array $finances): self
    {
        $this->initialized['finances'] = true;
        $this->finances = $finances;

        return $this;
    }

    /**
     * Liste des représentants de l'entreprise.
     *
     * @return list<RepresentantEntreprise>|null
     */
    public function getRepresentants(): ?array
    {
        return $this->representants;
    }

    /**
     * Liste des représentants de l'entreprise.
     *
     * @param list<RepresentantEntreprise>|null $representants
     */
    public function setRepresentants(?array $representants): self
    {
        $this->initialized['representants'] = true;
        $this->representants = $representants;

        return $this;
    }

    /**
     * Liste des bénéficiaires effectifs de l'entreprise (si disponibles).
     *
     * @return list<EntrepriseFichebeneficiairesEffectifsItem>|null
     */
    public function getBeneficiairesEffectifs(): ?array
    {
        return $this->beneficiairesEffectifs;
    }

    /**
     * Liste des bénéficiaires effectifs de l'entreprise (si disponibles).
     *
     * @param list<EntrepriseFichebeneficiairesEffectifsItem>|null $beneficiairesEffectifs
     */
    public function setBeneficiairesEffectifs(?array $beneficiairesEffectifs): self
    {
        $this->initialized['beneficiairesEffectifs'] = true;
        $this->beneficiairesEffectifs = $beneficiairesEffectifs;

        return $this;
    }

    /**
     * Liste des actes de l'entreprise.
     *
     * @return list<EntrepriseFichedepotsActesItem>|null
     */
    public function getDepotsActes(): ?array
    {
        return $this->depotsActes;
    }

    /**
     * Liste des actes de l'entreprise.
     *
     * @param list<EntrepriseFichedepotsActesItem>|null $depotsActes
     */
    public function setDepotsActes(?array $depotsActes): self
    {
        $this->initialized['depotsActes'] = true;
        $this->depotsActes = $depotsActes;

        return $this;
    }

    /**
     * Liste des comptes de l'entreprise.
     *
     * @return list<EntrepriseFichecomptesItem>|null
     */
    public function getComptes(): ?array
    {
        return $this->comptes;
    }

    /**
     * Liste des comptes de l'entreprise.
     *
     * @param list<EntrepriseFichecomptesItem>|null $comptes
     */
    public function setComptes(?array $comptes): self
    {
        $this->initialized['comptes'] = true;
        $this->comptes = $comptes;

        return $this;
    }

    /**
     * Liste des publications au Bodacc de l'entreprise.
     *
     * @return list<Bodacc>|null
     */
    public function getPublicationsBodacc(): ?array
    {
        return $this->publicationsBodacc;
    }

    /**
     * Liste des publications au Bodacc de l'entreprise.
     *
     * @param list<Bodacc>|null $publicationsBodacc
     */
    public function setPublicationsBodacc(?array $publicationsBodacc): self
    {
        $this->initialized['publicationsBodacc'] = true;
        $this->publicationsBodacc = $publicationsBodacc;

        return $this;
    }

    /**
     * Liste des procédures collectives de l'entreprise.
     *
     * @return list<EntrepriseFicheproceduresCollectivesItem>|null
     */
    public function getProceduresCollectives(): ?array
    {
        return $this->proceduresCollectives;
    }

    /**
     * Liste des procédures collectives de l'entreprise.
     *
     * @param list<EntrepriseFicheproceduresCollectivesItem>|null $proceduresCollectives
     */
    public function setProceduresCollectives(?array $proceduresCollectives): self
    {
        $this->initialized['proceduresCollectives'] = true;
        $this->proceduresCollectives = $proceduresCollectives;

        return $this;
    }

    /**
     * Vrai si l'entreprise a des procédures collectives (en cours ou terminées), faux sinon.
     */
    public function getProcedureCollectiveExiste(): ?bool
    {
        return $this->procedureCollectiveExiste;
    }

    /**
     * Vrai si l'entreprise a des procédures collectives (en cours ou terminées), faux sinon.
     */
    public function setProcedureCollectiveExiste(?bool $procedureCollectiveExiste): self
    {
        $this->initialized['procedureCollectiveExiste'] = true;
        $this->procedureCollectiveExiste = $procedureCollectiveExiste;

        return $this;
    }

    /**
     * Vrai si l'entreprise a des procédures collectives en cours, faux sinon.
     */
    public function getProcedureCollectiveEnCours(): ?bool
    {
        return $this->procedureCollectiveEnCours;
    }

    /**
     * Vrai si l'entreprise a des procédures collectives en cours, faux sinon.
     */
    public function setProcedureCollectiveEnCours(?bool $procedureCollectiveEnCours): self
    {
        $this->initialized['procedureCollectiveEnCours'] = true;
        $this->procedureCollectiveEnCours = $procedureCollectiveEnCours;

        return $this;
    }

    /**
     * Liste des statuts de l'entreprise.
     */
    public function getDerniersStatuts(): ?EntrepriseFichederniersStatuts
    {
        return $this->derniersStatuts;
    }

    /**
     * Liste des statuts de l'entreprise.
     */
    public function setDerniersStatuts(?EntrepriseFichederniersStatuts $derniersStatuts): self
    {
        $this->initialized['derniersStatuts'] = true;
        $this->derniersStatuts = $derniersStatuts;

        return $this;
    }

    /**
     * Extrait d'immatriculation de l'entreprise.
     */
    public function getExtraitImmatriculation(): ?EntrepriseFicheextraitImmatriculation
    {
        return $this->extraitImmatriculation;
    }

    /**
     * Extrait d'immatriculation de l'entreprise.
     */
    public function setExtraitImmatriculation(?EntrepriseFicheextraitImmatriculation $extraitImmatriculation): self
    {
        $this->initialized['extraitImmatriculation'] = true;
        $this->extraitImmatriculation = $extraitImmatriculation;

        return $this;
    }

    /**
     * Informations sur l'immatriculation de l'entreprise au Répertoire des Métiers.
     */
    public function getRnm(): ?EntrepriseFichernm
    {
        return $this->rnm;
    }

    /**
     * Informations sur l'immatriculation de l'entreprise au Répertoire des Métiers.
     */
    public function setRnm(?EntrepriseFichernm $rnm): self
    {
        $this->initialized['rnm'] = true;
        $this->rnm = $rnm;

        return $this;
    }

    /**
     * Liste des marques françaises déposées par l'entreprise. Uniquement présent si le paramètre "marques" a été mis à vrai.
     *
     * @return list<EntrepriseFichemarquesItem>|null
     */
    public function getMarques(): ?array
    {
        return $this->marques;
    }

    /**
     * Liste des marques françaises déposées par l'entreprise. Uniquement présent si le paramètre "marques" a été mis à vrai.
     *
     * @param list<EntrepriseFichemarquesItem>|null $marques
     */
    public function setMarques(?array $marques): self
    {
        $this->initialized['marques'] = true;
        $this->marques = $marques;

        return $this;
    }

    /**
     * Association liée à l'entreprise.
     */
    public function getAssociation(): ?Association
    {
        return $this->association;
    }

    /**
     * Association liée à l'entreprise.
     */
    public function setAssociation(?Association $association): self
    {
        $this->initialized['association'] = true;
        $this->association = $association;

        return $this;
    }

    /**
     * Liste des labels de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @return list<Labels>|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * Liste des labels de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @param list<Labels>|null $labels
     */
    public function setLabels(?array $labels): self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;

        return $this;
    }

    /**
     * Liste des sites internet de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @return list<string>|null
     */
    public function getSitesInternet(): ?array
    {
        return $this->sitesInternet;
    }

    /**
     * Liste des sites internet de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     *
     * @param list<string>|null $sitesInternet
     */
    public function setSitesInternet(?array $sitesInternet): self
    {
        $this->initialized['sitesInternet'] = true;
        $this->sitesInternet = $sitesInternet;

        return $this;
    }

    /**
     * Numéro de téléphone de l'entreprise au format 0123456789. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * Numéro de téléphone de l'entreprise au format 0123456789. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setTelephone(?string $telephone): self
    {
        $this->initialized['telephone'] = true;
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Adresse email de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Adresse email de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * Score non financier de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getScoringNonFinancier(): ?ScoringNonFinancier
    {
        return $this->scoringNonFinancier;
    }

    /**
     * Score non financier de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setScoringNonFinancier(?ScoringNonFinancier $scoringNonFinancier): self
    {
        $this->initialized['scoringNonFinancier'] = true;
        $this->scoringNonFinancier = $scoringNonFinancier;

        return $this;
    }

    /**
     * Score financier de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getScoringFinancier(): ?ScoringFinancier
    {
        return $this->scoringFinancier;
    }

    /**
     * Score financier de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setScoringFinancier(?ScoringFinancier $scoringFinancier): self
    {
        $this->initialized['scoringFinancier'] = true;
        $this->scoringFinancier = $scoringFinancier;

        return $this;
    }

    /**
     * Catégorie de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getCategorieEntreprise(): ?string
    {
        return $this->categorieEntreprise;
    }

    /**
     * Catégorie de l'entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function setCategorieEntreprise(?string $categorieEntreprise): self
    {
        $this->initialized['categorieEntreprise'] = true;
        $this->categorieEntreprise = $categorieEntreprise;

        return $this;
    }

    /**
     * Année de correspondance de la catégorie de l'entreprise. Uniquement présent si le champ supplémentaire `categorie_entreprise` est demandé.
     */
    public function getAnneeCategorieEntreprise(): ?int
    {
        return $this->anneeCategorieEntreprise;
    }

    /**
     * Année de correspondance de la catégorie de l'entreprise. Uniquement présent si le champ supplémentaire `categorie_entreprise` est demandé.
     */
    public function setAnneeCategorieEntreprise(?int $anneeCategorieEntreprise): self
    {
        $this->initialized['anneeCategorieEntreprise'] = true;
        $this->anneeCategorieEntreprise = $anneeCategorieEntreprise;

        return $this;
    }
}
