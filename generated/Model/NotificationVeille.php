<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationVeille extends \ArrayObject
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
     * SIREN de l’entreprise.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique.
     *
     * @var NotificationVeilleNomEntreprise|null
     */
    protected $nomEntreprise;
    /**
     * Nom commercial de l’entreprise.
     *
     * @var list<NotificationVeilleNomCommercialItem>|null
     */
    protected $nomCommercial;
    /**
     * Forme juridique de l'entreprise.
     *
     * @var NotificationVeilleFormeJuridique|null
     */
    protected $formeJuridique;
    /**
     * Adresse du siège social de l'entreprise.
     *
     * @var NotificationVeilleSiegeSocial|null
     */
    protected $siegeSocial;
    /**
     * Activité de l'entreprise cessée ou non.
     *
     * @var NotificationVeilleEntrepriseCessee|null
     */
    protected $entrepriseCessee;
    /**
     * Code NAF de l'entreprise.
     *
     * @var NotificationVeilleCodeNaf|null
     */
    protected $codeNaf;
    /**
     * Si vrai, l'entreprise a au moins un employé.
     *
     * @var NotificationVeilleEntrepriseEmployeuse|null
     */
    protected $entrepriseEmployeuse;
    /**
     * Enseigne de l'établissement.
     *
     * @var list<NotificationVeilleEnseigneItem>|null
     */
    protected $enseigne;
    /**
     * Nouvel établissement de l'entreprise.
     *
     * @var list<NotificationVeilleNouvelEtablissementItem>|null
     */
    protected $nouvelEtablissement;
    /**
     * Fermeture d'un établissement de l'entreprise.
     *
     * @var list<NotificationVeilleFermetureEtablissementItem>|null
     */
    protected $fermetureEtablissement;
    /**
     * Statut de l'entreprise au RCS.
     *
     * @var NotificationVeilleStatutRcs|null
     */
    protected $statutRcs;
    /**
     * Objet social de l'entreprise déclaré au RCS.
     *
     * @var NotificationVeilleObjetSocial|null
     */
    protected $objetSocial;
    /**
     * Capital de l'entreprise.
     *
     * @var NotificationVeilleCapital|null
     */
    protected $capital;
    /**
     * Date de clôture d'exercice de l'entreprise.
     *
     * @var NotificationVeilleDateClotureExercice|null
     */
    protected $dateClotureExercice;
    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @var list<NotificationVeilleChiffreAffairesItem>|null
     */
    protected $chiffreAffaires;
    /**
     * Résultat de l'entreprise.
     *
     * @var list<NotificationVeilleResultatItem>|null
     */
    protected $resultat;
    /**
     * Nouveaux comptes disponibles pour l'entreprise.
     *
     * @var list<NotificationVeilleNouveauxComptesDisponiblesItem>|null
     */
    protected $nouveauxComptesDisponibles;
    /**
     * Nouveaux comptes publiés pour l'entreprise.
     *
     * @var list<NotificationVeilleNouveauxComptesPubliesItem>|null
     */
    protected $nouveauxComptesPublies;
    /**
     * Nouvelle annonce de procédure collective publiée pour l'entreprise.
     *
     * @var list<NotificationVeilleNouvelleAnnonceProcedureCollectivePublieeItem>|null
     */
    protected $nouvelleAnnonceProcedureCollectivePubliee;
    /**
     * Nouvelle annonce de vente publiée pour l'entreprise.
     *
     * @var list<NotificationVeilleNouvelleAnnonceVentePublieeItem>|null
     */
    protected $nouvelleAnnonceVentePubliee;
    /**
     * Nouvelle annonce publiée pour l'entreprise.
     *
     * @var list<NotificationVeilleNouvelleAnnoncePublieeItem>|null
     */
    protected $nouvelleAnnoncePubliee;
    /**
     * Nouveaux statuts publiés pour l'entreprise.
     *
     * @var list<NotificationVeilleNouveauxStatutsPubliesItem>|null
     */
    protected $nouveauxStatutsPublies;
    /**
     * Nouvel acte publié pour l'entreprise.
     *
     * @var list<NotificationVeilleNouvelActePublieItem>|null
     */
    protected $nouvelActePublie;
    /**
     * Nouvelle déclaration de bénéficiaires effectifs publiée pour l'entreprise.
     *
     * @var list<NotificationVeilleNouvelleDeclarationBeneficiairesEffectifPublieeItem>|null
     */
    protected $nouvelleDeclarationBeneficiairesEffectifPubliee;
    /**
     * Nouveau dirigeant de l'entreprise.
     *
     * @var list<NotificationVeilleNouveauDirigeantItem>|null
     */
    protected $nouveauDirigeant;
    /**
     * Dirigeant partant de l'entreprise.
     *
     * @var list<NotificationVeilleDirigeantPartantItem>|null
     */
    protected $dirigeantPartant;
    /**
     * Rôle d'un ou de plusieurs dirigeants de l'entreprise.
     *
     * @var list<NotificationVeilleQualiteDirigeantItem>|null
     */
    protected $qualiteDirigeant;

    /**
     * SIREN de l’entreprise.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de l’entreprise.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique.
     */
    public function getNomEntreprise(): ?NotificationVeilleNomEntreprise
    {
        return $this->nomEntreprise;
    }

    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique.
     */
    public function setNomEntreprise(?NotificationVeilleNomEntreprise $nomEntreprise): self
    {
        $this->initialized['nomEntreprise'] = true;
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Nom commercial de l’entreprise.
     *
     * @return list<NotificationVeilleNomCommercialItem>|null
     */
    public function getNomCommercial(): ?array
    {
        return $this->nomCommercial;
    }

    /**
     * Nom commercial de l’entreprise.
     *
     * @param list<NotificationVeilleNomCommercialItem>|null $nomCommercial
     */
    public function setNomCommercial(?array $nomCommercial): self
    {
        $this->initialized['nomCommercial'] = true;
        $this->nomCommercial = $nomCommercial;

        return $this;
    }

    /**
     * Forme juridique de l'entreprise.
     */
    public function getFormeJuridique(): ?NotificationVeilleFormeJuridique
    {
        return $this->formeJuridique;
    }

    /**
     * Forme juridique de l'entreprise.
     */
    public function setFormeJuridique(?NotificationVeilleFormeJuridique $formeJuridique): self
    {
        $this->initialized['formeJuridique'] = true;
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    /**
     * Adresse du siège social de l'entreprise.
     */
    public function getSiegeSocial(): ?NotificationVeilleSiegeSocial
    {
        return $this->siegeSocial;
    }

    /**
     * Adresse du siège social de l'entreprise.
     */
    public function setSiegeSocial(?NotificationVeilleSiegeSocial $siegeSocial): self
    {
        $this->initialized['siegeSocial'] = true;
        $this->siegeSocial = $siegeSocial;

        return $this;
    }

    /**
     * Activité de l'entreprise cessée ou non.
     */
    public function getEntrepriseCessee(): ?NotificationVeilleEntrepriseCessee
    {
        return $this->entrepriseCessee;
    }

    /**
     * Activité de l'entreprise cessée ou non.
     */
    public function setEntrepriseCessee(?NotificationVeilleEntrepriseCessee $entrepriseCessee): self
    {
        $this->initialized['entrepriseCessee'] = true;
        $this->entrepriseCessee = $entrepriseCessee;

        return $this;
    }

    /**
     * Code NAF de l'entreprise.
     */
    public function getCodeNaf(): ?NotificationVeilleCodeNaf
    {
        return $this->codeNaf;
    }

    /**
     * Code NAF de l'entreprise.
     */
    public function setCodeNaf(?NotificationVeilleCodeNaf $codeNaf): self
    {
        $this->initialized['codeNaf'] = true;
        $this->codeNaf = $codeNaf;

        return $this;
    }

    /**
     * Si vrai, l'entreprise a au moins un employé.
     */
    public function getEntrepriseEmployeuse(): ?NotificationVeilleEntrepriseEmployeuse
    {
        return $this->entrepriseEmployeuse;
    }

    /**
     * Si vrai, l'entreprise a au moins un employé.
     */
    public function setEntrepriseEmployeuse(?NotificationVeilleEntrepriseEmployeuse $entrepriseEmployeuse): self
    {
        $this->initialized['entrepriseEmployeuse'] = true;
        $this->entrepriseEmployeuse = $entrepriseEmployeuse;

        return $this;
    }

    /**
     * Enseigne de l'établissement.
     *
     * @return list<NotificationVeilleEnseigneItem>|null
     */
    public function getEnseigne(): ?array
    {
        return $this->enseigne;
    }

    /**
     * Enseigne de l'établissement.
     *
     * @param list<NotificationVeilleEnseigneItem>|null $enseigne
     */
    public function setEnseigne(?array $enseigne): self
    {
        $this->initialized['enseigne'] = true;
        $this->enseigne = $enseigne;

        return $this;
    }

    /**
     * Nouvel établissement de l'entreprise.
     *
     * @return list<NotificationVeilleNouvelEtablissementItem>|null
     */
    public function getNouvelEtablissement(): ?array
    {
        return $this->nouvelEtablissement;
    }

    /**
     * Nouvel établissement de l'entreprise.
     *
     * @param list<NotificationVeilleNouvelEtablissementItem>|null $nouvelEtablissement
     */
    public function setNouvelEtablissement(?array $nouvelEtablissement): self
    {
        $this->initialized['nouvelEtablissement'] = true;
        $this->nouvelEtablissement = $nouvelEtablissement;

        return $this;
    }

    /**
     * Fermeture d'un établissement de l'entreprise.
     *
     * @return list<NotificationVeilleFermetureEtablissementItem>|null
     */
    public function getFermetureEtablissement(): ?array
    {
        return $this->fermetureEtablissement;
    }

    /**
     * Fermeture d'un établissement de l'entreprise.
     *
     * @param list<NotificationVeilleFermetureEtablissementItem>|null $fermetureEtablissement
     */
    public function setFermetureEtablissement(?array $fermetureEtablissement): self
    {
        $this->initialized['fermetureEtablissement'] = true;
        $this->fermetureEtablissement = $fermetureEtablissement;

        return $this;
    }

    /**
     * Statut de l'entreprise au RCS.
     */
    public function getStatutRcs(): ?NotificationVeilleStatutRcs
    {
        return $this->statutRcs;
    }

    /**
     * Statut de l'entreprise au RCS.
     */
    public function setStatutRcs(?NotificationVeilleStatutRcs $statutRcs): self
    {
        $this->initialized['statutRcs'] = true;
        $this->statutRcs = $statutRcs;

        return $this;
    }

    /**
     * Objet social de l'entreprise déclaré au RCS.
     */
    public function getObjetSocial(): ?NotificationVeilleObjetSocial
    {
        return $this->objetSocial;
    }

    /**
     * Objet social de l'entreprise déclaré au RCS.
     */
    public function setObjetSocial(?NotificationVeilleObjetSocial $objetSocial): self
    {
        $this->initialized['objetSocial'] = true;
        $this->objetSocial = $objetSocial;

        return $this;
    }

    /**
     * Capital de l'entreprise.
     */
    public function getCapital(): ?NotificationVeilleCapital
    {
        return $this->capital;
    }

    /**
     * Capital de l'entreprise.
     */
    public function setCapital(?NotificationVeilleCapital $capital): self
    {
        $this->initialized['capital'] = true;
        $this->capital = $capital;

        return $this;
    }

    /**
     * Date de clôture d'exercice de l'entreprise.
     */
    public function getDateClotureExercice(): ?NotificationVeilleDateClotureExercice
    {
        return $this->dateClotureExercice;
    }

    /**
     * Date de clôture d'exercice de l'entreprise.
     */
    public function setDateClotureExercice(?NotificationVeilleDateClotureExercice $dateClotureExercice): self
    {
        $this->initialized['dateClotureExercice'] = true;
        $this->dateClotureExercice = $dateClotureExercice;

        return $this;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @return list<NotificationVeilleChiffreAffairesItem>|null
     */
    public function getChiffreAffaires(): ?array
    {
        return $this->chiffreAffaires;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @param list<NotificationVeilleChiffreAffairesItem>|null $chiffreAffaires
     */
    public function setChiffreAffaires(?array $chiffreAffaires): self
    {
        $this->initialized['chiffreAffaires'] = true;
        $this->chiffreAffaires = $chiffreAffaires;

        return $this;
    }

    /**
     * Résultat de l'entreprise.
     *
     * @return list<NotificationVeilleResultatItem>|null
     */
    public function getResultat(): ?array
    {
        return $this->resultat;
    }

    /**
     * Résultat de l'entreprise.
     *
     * @param list<NotificationVeilleResultatItem>|null $resultat
     */
    public function setResultat(?array $resultat): self
    {
        $this->initialized['resultat'] = true;
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Nouveaux comptes disponibles pour l'entreprise.
     *
     * @return list<NotificationVeilleNouveauxComptesDisponiblesItem>|null
     */
    public function getNouveauxComptesDisponibles(): ?array
    {
        return $this->nouveauxComptesDisponibles;
    }

    /**
     * Nouveaux comptes disponibles pour l'entreprise.
     *
     * @param list<NotificationVeilleNouveauxComptesDisponiblesItem>|null $nouveauxComptesDisponibles
     */
    public function setNouveauxComptesDisponibles(?array $nouveauxComptesDisponibles): self
    {
        $this->initialized['nouveauxComptesDisponibles'] = true;
        $this->nouveauxComptesDisponibles = $nouveauxComptesDisponibles;

        return $this;
    }

    /**
     * Nouveaux comptes publiés pour l'entreprise.
     *
     * @return list<NotificationVeilleNouveauxComptesPubliesItem>|null
     */
    public function getNouveauxComptesPublies(): ?array
    {
        return $this->nouveauxComptesPublies;
    }

    /**
     * Nouveaux comptes publiés pour l'entreprise.
     *
     * @param list<NotificationVeilleNouveauxComptesPubliesItem>|null $nouveauxComptesPublies
     */
    public function setNouveauxComptesPublies(?array $nouveauxComptesPublies): self
    {
        $this->initialized['nouveauxComptesPublies'] = true;
        $this->nouveauxComptesPublies = $nouveauxComptesPublies;

        return $this;
    }

    /**
     * Nouvelle annonce de procédure collective publiée pour l'entreprise.
     *
     * @return list<NotificationVeilleNouvelleAnnonceProcedureCollectivePublieeItem>|null
     */
    public function getNouvelleAnnonceProcedureCollectivePubliee(): ?array
    {
        return $this->nouvelleAnnonceProcedureCollectivePubliee;
    }

    /**
     * Nouvelle annonce de procédure collective publiée pour l'entreprise.
     *
     * @param list<NotificationVeilleNouvelleAnnonceProcedureCollectivePublieeItem>|null $nouvelleAnnonceProcedureCollectivePubliee
     */
    public function setNouvelleAnnonceProcedureCollectivePubliee(?array $nouvelleAnnonceProcedureCollectivePubliee): self
    {
        $this->initialized['nouvelleAnnonceProcedureCollectivePubliee'] = true;
        $this->nouvelleAnnonceProcedureCollectivePubliee = $nouvelleAnnonceProcedureCollectivePubliee;

        return $this;
    }

    /**
     * Nouvelle annonce de vente publiée pour l'entreprise.
     *
     * @return list<NotificationVeilleNouvelleAnnonceVentePublieeItem>|null
     */
    public function getNouvelleAnnonceVentePubliee(): ?array
    {
        return $this->nouvelleAnnonceVentePubliee;
    }

    /**
     * Nouvelle annonce de vente publiée pour l'entreprise.
     *
     * @param list<NotificationVeilleNouvelleAnnonceVentePublieeItem>|null $nouvelleAnnonceVentePubliee
     */
    public function setNouvelleAnnonceVentePubliee(?array $nouvelleAnnonceVentePubliee): self
    {
        $this->initialized['nouvelleAnnonceVentePubliee'] = true;
        $this->nouvelleAnnonceVentePubliee = $nouvelleAnnonceVentePubliee;

        return $this;
    }

    /**
     * Nouvelle annonce publiée pour l'entreprise.
     *
     * @return list<NotificationVeilleNouvelleAnnoncePublieeItem>|null
     */
    public function getNouvelleAnnoncePubliee(): ?array
    {
        return $this->nouvelleAnnoncePubliee;
    }

    /**
     * Nouvelle annonce publiée pour l'entreprise.
     *
     * @param list<NotificationVeilleNouvelleAnnoncePublieeItem>|null $nouvelleAnnoncePubliee
     */
    public function setNouvelleAnnoncePubliee(?array $nouvelleAnnoncePubliee): self
    {
        $this->initialized['nouvelleAnnoncePubliee'] = true;
        $this->nouvelleAnnoncePubliee = $nouvelleAnnoncePubliee;

        return $this;
    }

    /**
     * Nouveaux statuts publiés pour l'entreprise.
     *
     * @return list<NotificationVeilleNouveauxStatutsPubliesItem>|null
     */
    public function getNouveauxStatutsPublies(): ?array
    {
        return $this->nouveauxStatutsPublies;
    }

    /**
     * Nouveaux statuts publiés pour l'entreprise.
     *
     * @param list<NotificationVeilleNouveauxStatutsPubliesItem>|null $nouveauxStatutsPublies
     */
    public function setNouveauxStatutsPublies(?array $nouveauxStatutsPublies): self
    {
        $this->initialized['nouveauxStatutsPublies'] = true;
        $this->nouveauxStatutsPublies = $nouveauxStatutsPublies;

        return $this;
    }

    /**
     * Nouvel acte publié pour l'entreprise.
     *
     * @return list<NotificationVeilleNouvelActePublieItem>|null
     */
    public function getNouvelActePublie(): ?array
    {
        return $this->nouvelActePublie;
    }

    /**
     * Nouvel acte publié pour l'entreprise.
     *
     * @param list<NotificationVeilleNouvelActePublieItem>|null $nouvelActePublie
     */
    public function setNouvelActePublie(?array $nouvelActePublie): self
    {
        $this->initialized['nouvelActePublie'] = true;
        $this->nouvelActePublie = $nouvelActePublie;

        return $this;
    }

    /**
     * Nouvelle déclaration de bénéficiaires effectifs publiée pour l'entreprise.
     *
     * @return list<NotificationVeilleNouvelleDeclarationBeneficiairesEffectifPublieeItem>|null
     */
    public function getNouvelleDeclarationBeneficiairesEffectifPubliee(): ?array
    {
        return $this->nouvelleDeclarationBeneficiairesEffectifPubliee;
    }

    /**
     * Nouvelle déclaration de bénéficiaires effectifs publiée pour l'entreprise.
     *
     * @param list<NotificationVeilleNouvelleDeclarationBeneficiairesEffectifPublieeItem>|null $nouvelleDeclarationBeneficiairesEffectifPubliee
     */
    public function setNouvelleDeclarationBeneficiairesEffectifPubliee(?array $nouvelleDeclarationBeneficiairesEffectifPubliee): self
    {
        $this->initialized['nouvelleDeclarationBeneficiairesEffectifPubliee'] = true;
        $this->nouvelleDeclarationBeneficiairesEffectifPubliee = $nouvelleDeclarationBeneficiairesEffectifPubliee;

        return $this;
    }

    /**
     * Nouveau dirigeant de l'entreprise.
     *
     * @return list<NotificationVeilleNouveauDirigeantItem>|null
     */
    public function getNouveauDirigeant(): ?array
    {
        return $this->nouveauDirigeant;
    }

    /**
     * Nouveau dirigeant de l'entreprise.
     *
     * @param list<NotificationVeilleNouveauDirigeantItem>|null $nouveauDirigeant
     */
    public function setNouveauDirigeant(?array $nouveauDirigeant): self
    {
        $this->initialized['nouveauDirigeant'] = true;
        $this->nouveauDirigeant = $nouveauDirigeant;

        return $this;
    }

    /**
     * Dirigeant partant de l'entreprise.
     *
     * @return list<NotificationVeilleDirigeantPartantItem>|null
     */
    public function getDirigeantPartant(): ?array
    {
        return $this->dirigeantPartant;
    }

    /**
     * Dirigeant partant de l'entreprise.
     *
     * @param list<NotificationVeilleDirigeantPartantItem>|null $dirigeantPartant
     */
    public function setDirigeantPartant(?array $dirigeantPartant): self
    {
        $this->initialized['dirigeantPartant'] = true;
        $this->dirigeantPartant = $dirigeantPartant;

        return $this;
    }

    /**
     * Rôle d'un ou de plusieurs dirigeants de l'entreprise.
     *
     * @return list<NotificationVeilleQualiteDirigeantItem>|null
     */
    public function getQualiteDirigeant(): ?array
    {
        return $this->qualiteDirigeant;
    }

    /**
     * Rôle d'un ou de plusieurs dirigeants de l'entreprise.
     *
     * @param list<NotificationVeilleQualiteDirigeantItem>|null $qualiteDirigeant
     */
    public function setQualiteDirigeant(?array $qualiteDirigeant): self
    {
        $this->initialized['qualiteDirigeant'] = true;
        $this->qualiteDirigeant = $qualiteDirigeant;

        return $this;
    }
}
