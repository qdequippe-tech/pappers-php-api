<?php

namespace Qdequippe\Pappers\Api\Model;

class SuggestionsGetResponse200ResultatsNomEntrepriseItem extends \ArrayObject
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
     * Nom de l'entreprise, avec le texte recherché encerclé d'une balise HTML `<em>`.
     *
     * @var string|null
     */
    protected $mention;
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
     * Si vrai, l'entreprise est une micro-entreprise. Uniquement présent si demandé dans les champs supplémentaires.
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
     * @var EtablissementRecherche|null
     */
    protected $siege;
    /**
     * Statut consolidé de l'entreprise (prise en compte des statuts INSEE, RNE et RCS).
     *
     * @var string|null
     */
    protected $statutConsolide;
    /**
     * Liste des villes où l'entreprise a au moins un établissement.
     *
     * @var list<string>|null
     */
    protected $villes;
    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @var int|null
     */
    protected $chiffreAffaires;
    /**
     * Résultat de l'entreprise.
     *
     * @var int|null
     */
    protected $resultat;
    /**
     * Effectif de l'entreprise.
     *
     * @var int|null
     */
    protected $effectifsFinances;
    /**
     * Année de correspondance des variables financières (chiffre_affaires, resultat, effectifs_finances).
     *
     * @var string|null
     */
    protected $anneeFinances;

    /**
     * Nom de l'entreprise, avec le texte recherché encerclé d'une balise HTML `<em>`.
     */
    public function getMention(): ?string
    {
        return $this->mention;
    }

    /**
     * Nom de l'entreprise, avec le texte recherché encerclé d'une balise HTML `<em>`.
     */
    public function setMention(?string $mention): self
    {
        $this->initialized['mention'] = true;
        $this->mention = $mention;

        return $this;
    }

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
     * Si vrai, l'entreprise est une micro-entreprise. Uniquement présent si demandé dans les champs supplémentaires.
     */
    public function getMicroEntreprise(): ?bool
    {
        return $this->microEntreprise;
    }

    /**
     * Si vrai, l'entreprise est une micro-entreprise. Uniquement présent si demandé dans les champs supplémentaires.
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

    public function getSiege(): ?EtablissementRecherche
    {
        return $this->siege;
    }

    public function setSiege(?EtablissementRecherche $siege): self
    {
        $this->initialized['siege'] = true;
        $this->siege = $siege;

        return $this;
    }

    /**
     * Statut consolidé de l'entreprise (prise en compte des statuts INSEE, RNE et RCS).
     */
    public function getStatutConsolide(): ?string
    {
        return $this->statutConsolide;
    }

    /**
     * Statut consolidé de l'entreprise (prise en compte des statuts INSEE, RNE et RCS).
     */
    public function setStatutConsolide(?string $statutConsolide): self
    {
        $this->initialized['statutConsolide'] = true;
        $this->statutConsolide = $statutConsolide;

        return $this;
    }

    /**
     * Liste des villes où l'entreprise a au moins un établissement.
     *
     * @return list<string>|null
     */
    public function getVilles(): ?array
    {
        return $this->villes;
    }

    /**
     * Liste des villes où l'entreprise a au moins un établissement.
     *
     * @param list<string>|null $villes
     */
    public function setVilles(?array $villes): self
    {
        $this->initialized['villes'] = true;
        $this->villes = $villes;

        return $this;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     */
    public function getChiffreAffaires(): ?int
    {
        return $this->chiffreAffaires;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     */
    public function setChiffreAffaires(?int $chiffreAffaires): self
    {
        $this->initialized['chiffreAffaires'] = true;
        $this->chiffreAffaires = $chiffreAffaires;

        return $this;
    }

    /**
     * Résultat de l'entreprise.
     */
    public function getResultat(): ?int
    {
        return $this->resultat;
    }

    /**
     * Résultat de l'entreprise.
     */
    public function setResultat(?int $resultat): self
    {
        $this->initialized['resultat'] = true;
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Effectif de l'entreprise.
     */
    public function getEffectifsFinances(): ?int
    {
        return $this->effectifsFinances;
    }

    /**
     * Effectif de l'entreprise.
     */
    public function setEffectifsFinances(?int $effectifsFinances): self
    {
        $this->initialized['effectifsFinances'] = true;
        $this->effectifsFinances = $effectifsFinances;

        return $this;
    }

    /**
     * Année de correspondance des variables financières (chiffre_affaires, resultat, effectifs_finances).
     */
    public function getAnneeFinances(): ?string
    {
        return $this->anneeFinances;
    }

    /**
     * Année de correspondance des variables financières (chiffre_affaires, resultat, effectifs_finances).
     */
    public function setAnneeFinances(?string $anneeFinances): self
    {
        $this->initialized['anneeFinances'] = true;
        $this->anneeFinances = $anneeFinances;

        return $this;
    }
}
