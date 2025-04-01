<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntreprise extends \ArrayObject
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
     * Détails de l'entreprise.
     *
     * @var NotificationEntrepriseDetailsEntreprise|null
     */
    protected $detailsEntreprise;
    /**
     * Note optionnelle relative à l’entreprise surveillé.
     *
     * @var string|null
     */
    protected $information;
    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique.
     *
     * @var NotificationEntrepriseNomEntreprise|null
     */
    protected $nomEntreprise;
    /**
     * Nom commercial de l’entreprise.
     *
     * @var list<NotificationEntrepriseNomCommercialItem>|null
     */
    protected $nomCommercial;
    /**
     * Forme juridique de l'entreprise.
     *
     * @var NotificationEntrepriseFormeJuridique|null
     */
    protected $formeJuridique;
    /**
     * Adresse du siège social de l'entreprise.
     *
     * @var NotificationEntrepriseSiegeSocial|null
     */
    protected $siegeSocial;
    /**
     * Activité de l'entreprise cessée ou non.
     *
     * @var NotificationEntrepriseEntrepriseCessee|null
     */
    protected $entrepriseCessee;
    /**
     * Statut de diffusion des informations de l'entreprises.
     *
     * @var NotificationEntrepriseStatutDiffusion|null
     */
    protected $statutDiffusion;
    /**
     * Code NAF de l'entreprise.
     *
     * @var NotificationEntrepriseCodeNaf|null
     */
    protected $codeNaf;
    /**
     * Si vrai, l'entreprise a au moins un employé.
     *
     * @var NotificationEntrepriseEntrepriseEmployeuse|null
     */
    protected $entrepriseEmployeuse;
    /**
     * Enseigne de l'établissement.
     *
     * @var list<NotificationEntrepriseEnseigneItem>|null
     */
    protected $enseigne;
    /**
     * Nouvel établissement de l'entreprise.
     *
     * @var list<NotificationEntrepriseNouvelEtablissementItem>|null
     */
    protected $nouvelEtablissement;
    /**
     * Fermeture d'un établissement de l'entreprise.
     *
     * @var list<NotificationEntrepriseFermetureEtablissementItem>|null
     */
    protected $fermetureEtablissement;
    /**
     * Statut de l'entreprise au RCS.
     *
     * @var NotificationEntrepriseStatutRcs|null
     */
    protected $statutRcs;
    /**
     * Objet social de l'entreprise déclaré au RCS.
     *
     * @var NotificationEntrepriseObjetSocial|null
     */
    protected $objetSocial;
    /**
     * Capital de l'entreprise.
     *
     * @var NotificationEntrepriseCapital|null
     */
    protected $capital;
    /**
     * Date de clôture d'exercice de l'entreprise.
     *
     * @var NotificationEntrepriseDateClotureExercice|null
     */
    protected $dateClotureExercice;
    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @var list<NotificationEntrepriseChiffreAffairesItem>|null
     */
    protected $chiffreAffaires;
    /**
     * Résultat de l'entreprise.
     *
     * @var list<NotificationEntrepriseResultatItem>|null
     */
    protected $resultat;
    /**
     * Nouveaux comptes disponibles pour l'entreprise.
     *
     * @var list<NotificationEntrepriseNouveauxComptesDisponiblesItem>|null
     */
    protected $nouveauxComptesDisponibles;
    /**
     * Nouveaux comptes publiés pour l'entreprise.
     *
     * @var list<NotificationEntrepriseNouveauxComptesPubliesItem>|null
     */
    protected $nouveauxComptesPublies;
    /**
     * Nouvelle annonce de procédure collective publiée pour l'entreprise.
     *
     * @var list<NotificationEntrepriseNouvelleAnnonceProcedureCollectivePublieeItem>|null
     */
    protected $nouvelleAnnonceProcedureCollectivePubliee;
    /**
     * Nouvelle annonce de vente publiée pour l'entreprise.
     *
     * @var list<NotificationEntrepriseNouvelleAnnonceVentePublieeItem>|null
     */
    protected $nouvelleAnnonceVentePubliee;
    /**
     * Nouvelle annonce publiée pour l'entreprise.
     *
     * @var list<NotificationEntrepriseNouvelleAnnoncePublieeItem>|null
     */
    protected $nouvelleAnnoncePubliee;
    /**
     * Nouveaux statuts publiés pour l'entreprise.
     *
     * @var list<NotificationEntrepriseNouveauxStatutsPubliesItem>|null
     */
    protected $nouveauxStatutsPublies;
    /**
     * Nouvel acte publié pour l'entreprise.
     *
     * @var list<NotificationEntrepriseNouvelActePublieItem>|null
     */
    protected $nouvelActePublie;
    /**
     * Nouvelle déclaration de bénéficiaires effectifs publiée pour l'entreprise.
     *
     * @var list<NotificationEntrepriseNouvelleDeclarationBeneficiairesEffectifPublieeItem>|null
     */
    protected $nouvelleDeclarationBeneficiairesEffectifPubliee;
    /**
     * Nouveau dirigeant de l'entreprise.
     *
     * @var list<NotificationEntrepriseNouveauDirigeantItem>|null
     */
    protected $nouveauDirigeant;
    /**
     * Dirigeant partant de l'entreprise.
     *
     * @var list<NotificationEntrepriseDirigeantPartantItem>|null
     */
    protected $dirigeantPartant;
    /**
     * Rôle d'un ou de plusieurs dirigeants de l'entreprise.
     *
     * @var list<NotificationEntrepriseQualiteDirigeantItem>|null
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
     * Détails de l'entreprise.
     */
    public function getDetailsEntreprise(): ?NotificationEntrepriseDetailsEntreprise
    {
        return $this->detailsEntreprise;
    }

    /**
     * Détails de l'entreprise.
     */
    public function setDetailsEntreprise(?NotificationEntrepriseDetailsEntreprise $detailsEntreprise): self
    {
        $this->initialized['detailsEntreprise'] = true;
        $this->detailsEntreprise = $detailsEntreprise;

        return $this;
    }

    /**
     * Note optionnelle relative à l’entreprise surveillé.
     */
    public function getInformation(): ?string
    {
        return $this->information;
    }

    /**
     * Note optionnelle relative à l’entreprise surveillé.
     */
    public function setInformation(?string $information): self
    {
        $this->initialized['information'] = true;
        $this->information = $information;

        return $this;
    }

    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique.
     */
    public function getNomEntreprise(): ?NotificationEntrepriseNomEntreprise
    {
        return $this->nomEntreprise;
    }

    /**
     * Le nom de l'entreprise. Il est égal à sigle + dénomination en cas de personne morale, ou à nom + prénom en cas de personne physique.
     */
    public function setNomEntreprise(?NotificationEntrepriseNomEntreprise $nomEntreprise): self
    {
        $this->initialized['nomEntreprise'] = true;
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Nom commercial de l’entreprise.
     *
     * @return list<NotificationEntrepriseNomCommercialItem>|null
     */
    public function getNomCommercial(): ?array
    {
        return $this->nomCommercial;
    }

    /**
     * Nom commercial de l’entreprise.
     *
     * @param list<NotificationEntrepriseNomCommercialItem>|null $nomCommercial
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
    public function getFormeJuridique(): ?NotificationEntrepriseFormeJuridique
    {
        return $this->formeJuridique;
    }

    /**
     * Forme juridique de l'entreprise.
     */
    public function setFormeJuridique(?NotificationEntrepriseFormeJuridique $formeJuridique): self
    {
        $this->initialized['formeJuridique'] = true;
        $this->formeJuridique = $formeJuridique;

        return $this;
    }

    /**
     * Adresse du siège social de l'entreprise.
     */
    public function getSiegeSocial(): ?NotificationEntrepriseSiegeSocial
    {
        return $this->siegeSocial;
    }

    /**
     * Adresse du siège social de l'entreprise.
     */
    public function setSiegeSocial(?NotificationEntrepriseSiegeSocial $siegeSocial): self
    {
        $this->initialized['siegeSocial'] = true;
        $this->siegeSocial = $siegeSocial;

        return $this;
    }

    /**
     * Activité de l'entreprise cessée ou non.
     */
    public function getEntrepriseCessee(): ?NotificationEntrepriseEntrepriseCessee
    {
        return $this->entrepriseCessee;
    }

    /**
     * Activité de l'entreprise cessée ou non.
     */
    public function setEntrepriseCessee(?NotificationEntrepriseEntrepriseCessee $entrepriseCessee): self
    {
        $this->initialized['entrepriseCessee'] = true;
        $this->entrepriseCessee = $entrepriseCessee;

        return $this;
    }

    /**
     * Statut de diffusion des informations de l'entreprises.
     */
    public function getStatutDiffusion(): ?NotificationEntrepriseStatutDiffusion
    {
        return $this->statutDiffusion;
    }

    /**
     * Statut de diffusion des informations de l'entreprises.
     */
    public function setStatutDiffusion(?NotificationEntrepriseStatutDiffusion $statutDiffusion): self
    {
        $this->initialized['statutDiffusion'] = true;
        $this->statutDiffusion = $statutDiffusion;

        return $this;
    }

    /**
     * Code NAF de l'entreprise.
     */
    public function getCodeNaf(): ?NotificationEntrepriseCodeNaf
    {
        return $this->codeNaf;
    }

    /**
     * Code NAF de l'entreprise.
     */
    public function setCodeNaf(?NotificationEntrepriseCodeNaf $codeNaf): self
    {
        $this->initialized['codeNaf'] = true;
        $this->codeNaf = $codeNaf;

        return $this;
    }

    /**
     * Si vrai, l'entreprise a au moins un employé.
     */
    public function getEntrepriseEmployeuse(): ?NotificationEntrepriseEntrepriseEmployeuse
    {
        return $this->entrepriseEmployeuse;
    }

    /**
     * Si vrai, l'entreprise a au moins un employé.
     */
    public function setEntrepriseEmployeuse(?NotificationEntrepriseEntrepriseEmployeuse $entrepriseEmployeuse): self
    {
        $this->initialized['entrepriseEmployeuse'] = true;
        $this->entrepriseEmployeuse = $entrepriseEmployeuse;

        return $this;
    }

    /**
     * Enseigne de l'établissement.
     *
     * @return list<NotificationEntrepriseEnseigneItem>|null
     */
    public function getEnseigne(): ?array
    {
        return $this->enseigne;
    }

    /**
     * Enseigne de l'établissement.
     *
     * @param list<NotificationEntrepriseEnseigneItem>|null $enseigne
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
     * @return list<NotificationEntrepriseNouvelEtablissementItem>|null
     */
    public function getNouvelEtablissement(): ?array
    {
        return $this->nouvelEtablissement;
    }

    /**
     * Nouvel établissement de l'entreprise.
     *
     * @param list<NotificationEntrepriseNouvelEtablissementItem>|null $nouvelEtablissement
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
     * @return list<NotificationEntrepriseFermetureEtablissementItem>|null
     */
    public function getFermetureEtablissement(): ?array
    {
        return $this->fermetureEtablissement;
    }

    /**
     * Fermeture d'un établissement de l'entreprise.
     *
     * @param list<NotificationEntrepriseFermetureEtablissementItem>|null $fermetureEtablissement
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
    public function getStatutRcs(): ?NotificationEntrepriseStatutRcs
    {
        return $this->statutRcs;
    }

    /**
     * Statut de l'entreprise au RCS.
     */
    public function setStatutRcs(?NotificationEntrepriseStatutRcs $statutRcs): self
    {
        $this->initialized['statutRcs'] = true;
        $this->statutRcs = $statutRcs;

        return $this;
    }

    /**
     * Objet social de l'entreprise déclaré au RCS.
     */
    public function getObjetSocial(): ?NotificationEntrepriseObjetSocial
    {
        return $this->objetSocial;
    }

    /**
     * Objet social de l'entreprise déclaré au RCS.
     */
    public function setObjetSocial(?NotificationEntrepriseObjetSocial $objetSocial): self
    {
        $this->initialized['objetSocial'] = true;
        $this->objetSocial = $objetSocial;

        return $this;
    }

    /**
     * Capital de l'entreprise.
     */
    public function getCapital(): ?NotificationEntrepriseCapital
    {
        return $this->capital;
    }

    /**
     * Capital de l'entreprise.
     */
    public function setCapital(?NotificationEntrepriseCapital $capital): self
    {
        $this->initialized['capital'] = true;
        $this->capital = $capital;

        return $this;
    }

    /**
     * Date de clôture d'exercice de l'entreprise.
     */
    public function getDateClotureExercice(): ?NotificationEntrepriseDateClotureExercice
    {
        return $this->dateClotureExercice;
    }

    /**
     * Date de clôture d'exercice de l'entreprise.
     */
    public function setDateClotureExercice(?NotificationEntrepriseDateClotureExercice $dateClotureExercice): self
    {
        $this->initialized['dateClotureExercice'] = true;
        $this->dateClotureExercice = $dateClotureExercice;

        return $this;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @return list<NotificationEntrepriseChiffreAffairesItem>|null
     */
    public function getChiffreAffaires(): ?array
    {
        return $this->chiffreAffaires;
    }

    /**
     * Chiffre d'affaires de l'entreprise.
     *
     * @param list<NotificationEntrepriseChiffreAffairesItem>|null $chiffreAffaires
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
     * @return list<NotificationEntrepriseResultatItem>|null
     */
    public function getResultat(): ?array
    {
        return $this->resultat;
    }

    /**
     * Résultat de l'entreprise.
     *
     * @param list<NotificationEntrepriseResultatItem>|null $resultat
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
     * @return list<NotificationEntrepriseNouveauxComptesDisponiblesItem>|null
     */
    public function getNouveauxComptesDisponibles(): ?array
    {
        return $this->nouveauxComptesDisponibles;
    }

    /**
     * Nouveaux comptes disponibles pour l'entreprise.
     *
     * @param list<NotificationEntrepriseNouveauxComptesDisponiblesItem>|null $nouveauxComptesDisponibles
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
     * @return list<NotificationEntrepriseNouveauxComptesPubliesItem>|null
     */
    public function getNouveauxComptesPublies(): ?array
    {
        return $this->nouveauxComptesPublies;
    }

    /**
     * Nouveaux comptes publiés pour l'entreprise.
     *
     * @param list<NotificationEntrepriseNouveauxComptesPubliesItem>|null $nouveauxComptesPublies
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
     * @return list<NotificationEntrepriseNouvelleAnnonceProcedureCollectivePublieeItem>|null
     */
    public function getNouvelleAnnonceProcedureCollectivePubliee(): ?array
    {
        return $this->nouvelleAnnonceProcedureCollectivePubliee;
    }

    /**
     * Nouvelle annonce de procédure collective publiée pour l'entreprise.
     *
     * @param list<NotificationEntrepriseNouvelleAnnonceProcedureCollectivePublieeItem>|null $nouvelleAnnonceProcedureCollectivePubliee
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
     * @return list<NotificationEntrepriseNouvelleAnnonceVentePublieeItem>|null
     */
    public function getNouvelleAnnonceVentePubliee(): ?array
    {
        return $this->nouvelleAnnonceVentePubliee;
    }

    /**
     * Nouvelle annonce de vente publiée pour l'entreprise.
     *
     * @param list<NotificationEntrepriseNouvelleAnnonceVentePublieeItem>|null $nouvelleAnnonceVentePubliee
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
     * @return list<NotificationEntrepriseNouvelleAnnoncePublieeItem>|null
     */
    public function getNouvelleAnnoncePubliee(): ?array
    {
        return $this->nouvelleAnnoncePubliee;
    }

    /**
     * Nouvelle annonce publiée pour l'entreprise.
     *
     * @param list<NotificationEntrepriseNouvelleAnnoncePublieeItem>|null $nouvelleAnnoncePubliee
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
     * @return list<NotificationEntrepriseNouveauxStatutsPubliesItem>|null
     */
    public function getNouveauxStatutsPublies(): ?array
    {
        return $this->nouveauxStatutsPublies;
    }

    /**
     * Nouveaux statuts publiés pour l'entreprise.
     *
     * @param list<NotificationEntrepriseNouveauxStatutsPubliesItem>|null $nouveauxStatutsPublies
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
     * @return list<NotificationEntrepriseNouvelActePublieItem>|null
     */
    public function getNouvelActePublie(): ?array
    {
        return $this->nouvelActePublie;
    }

    /**
     * Nouvel acte publié pour l'entreprise.
     *
     * @param list<NotificationEntrepriseNouvelActePublieItem>|null $nouvelActePublie
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
     * @return list<NotificationEntrepriseNouvelleDeclarationBeneficiairesEffectifPublieeItem>|null
     */
    public function getNouvelleDeclarationBeneficiairesEffectifPubliee(): ?array
    {
        return $this->nouvelleDeclarationBeneficiairesEffectifPubliee;
    }

    /**
     * Nouvelle déclaration de bénéficiaires effectifs publiée pour l'entreprise.
     *
     * @param list<NotificationEntrepriseNouvelleDeclarationBeneficiairesEffectifPublieeItem>|null $nouvelleDeclarationBeneficiairesEffectifPubliee
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
     * @return list<NotificationEntrepriseNouveauDirigeantItem>|null
     */
    public function getNouveauDirigeant(): ?array
    {
        return $this->nouveauDirigeant;
    }

    /**
     * Nouveau dirigeant de l'entreprise.
     *
     * @param list<NotificationEntrepriseNouveauDirigeantItem>|null $nouveauDirigeant
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
     * @return list<NotificationEntrepriseDirigeantPartantItem>|null
     */
    public function getDirigeantPartant(): ?array
    {
        return $this->dirigeantPartant;
    }

    /**
     * Dirigeant partant de l'entreprise.
     *
     * @param list<NotificationEntrepriseDirigeantPartantItem>|null $dirigeantPartant
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
     * @return list<NotificationEntrepriseQualiteDirigeantItem>|null
     */
    public function getQualiteDirigeant(): ?array
    {
        return $this->qualiteDirigeant;
    }

    /**
     * Rôle d'un ou de plusieurs dirigeants de l'entreprise.
     *
     * @param list<NotificationEntrepriseQualiteDirigeantItem>|null $qualiteDirigeant
     */
    public function setQualiteDirigeant(?array $qualiteDirigeant): self
    {
        $this->initialized['qualiteDirigeant'] = true;
        $this->qualiteDirigeant = $qualiteDirigeant;

        return $this;
    }
}
