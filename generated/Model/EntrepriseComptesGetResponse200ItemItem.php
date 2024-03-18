<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseComptesGetResponse200ItemItem extends \ArrayObject
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
     * Date de dépôt des comptes, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateDepot;
    /**
     * Code du greffe de dépôt des comptes.
     *
     * @var string|null
     */
    protected $codeGreffe;
    /**
     * Numéro de dépôt des comptes au greffe.
     *
     * @var string|null
     */
    protected $numeroDepot;
    /**
     * Numéro de gestion au greffe.
     *
     * @var string|null
     */
    protected $numeroGestion;
    /**
     * Date de cloture des comptes, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateCloture;
    /**
     * Date de cloture des comptes n-1, lorsque présents, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateClotureN1;
    /**
     * Durée de l'exercice déposé, en mois.
     *
     * @var int|null
     */
    protected $dureeExerciceN;
    /**
     * Durée de l'exercice précédent, lorsque présent, en mois.
     *
     * @var int|null
     */
    protected $dureeExerciceN1;
    /**
     * Type de comptes (C = complets ; S = simplifiés ; K = consolidés ; CS = mélange complets/simplifiés ; B = banques ; A = assurances).
     *
     * @var string|null
     */
    protected $typeComptes;
    /**
     * Libellé du type de comptes.
     *
     * @var string|null
     */
    protected $libelleTypeComptes;
    /**
     * Devise des comptes.
     *
     * @var string|null
     */
    protected $devise;
    /**
     * Devise d'origine en cas de conversion.
     *
     * @var string|null
     */
    protected $deviseOrigine;
    /**
     * Confidentialité totale des comptes.
     *
     * @var bool|null
     */
    protected $confidentialite;
    /**
     * Confidentialité partielle des comptes (seul le compte de résultat est confidentiel, le reste des comptes sont disponibles).
     *
     * @var bool|null
     */
    protected $confidentialiteCompteDeResultat;
    /**
     * Vrai si les comptes sont cohérents d'un point de vue comptable (équilibre du bilan par exemple).
     *
     * @var bool|null
     */
    protected $coherenceComptable;
    /**
     * Description du type de saisie des comptes.
     *
     * @var string|null
     */
    protected $typeSaisie;
    /**
     * Informations complémentaires sur le traitement des comptes.
     *
     * @var list<string>|null
     */
    protected $informationsTraitement;
    /**
     * Liste des sections de liasses fiscales.
     *
     * @var list<EntrepriseComptesGetResponse200ItemItemSectionsItem>|null
     */
    protected $sections;
    /**
     * @var Ratios|null
     */
    protected $ratios;

    /**
     * Date de dépôt des comptes, au format AAAA-MM-JJ.
     */
    public function getDateDepot(): ?string
    {
        return $this->dateDepot;
    }

    /**
     * Date de dépôt des comptes, au format AAAA-MM-JJ.
     */
    public function setDateDepot(?string $dateDepot): self
    {
        $this->initialized['dateDepot'] = true;
        $this->dateDepot = $dateDepot;

        return $this;
    }

    /**
     * Code du greffe de dépôt des comptes.
     */
    public function getCodeGreffe(): ?string
    {
        return $this->codeGreffe;
    }

    /**
     * Code du greffe de dépôt des comptes.
     */
    public function setCodeGreffe(?string $codeGreffe): self
    {
        $this->initialized['codeGreffe'] = true;
        $this->codeGreffe = $codeGreffe;

        return $this;
    }

    /**
     * Numéro de dépôt des comptes au greffe.
     */
    public function getNumeroDepot(): ?string
    {
        return $this->numeroDepot;
    }

    /**
     * Numéro de dépôt des comptes au greffe.
     */
    public function setNumeroDepot(?string $numeroDepot): self
    {
        $this->initialized['numeroDepot'] = true;
        $this->numeroDepot = $numeroDepot;

        return $this;
    }

    /**
     * Numéro de gestion au greffe.
     */
    public function getNumeroGestion(): ?string
    {
        return $this->numeroGestion;
    }

    /**
     * Numéro de gestion au greffe.
     */
    public function setNumeroGestion(?string $numeroGestion): self
    {
        $this->initialized['numeroGestion'] = true;
        $this->numeroGestion = $numeroGestion;

        return $this;
    }

    /**
     * Date de cloture des comptes, au format AAAA-MM-JJ.
     */
    public function getDateCloture(): ?string
    {
        return $this->dateCloture;
    }

    /**
     * Date de cloture des comptes, au format AAAA-MM-JJ.
     */
    public function setDateCloture(?string $dateCloture): self
    {
        $this->initialized['dateCloture'] = true;
        $this->dateCloture = $dateCloture;

        return $this;
    }

    /**
     * Date de cloture des comptes n-1, lorsque présents, au format AAAA-MM-JJ.
     */
    public function getDateClotureN1(): ?string
    {
        return $this->dateClotureN1;
    }

    /**
     * Date de cloture des comptes n-1, lorsque présents, au format AAAA-MM-JJ.
     */
    public function setDateClotureN1(?string $dateClotureN1): self
    {
        $this->initialized['dateClotureN1'] = true;
        $this->dateClotureN1 = $dateClotureN1;

        return $this;
    }

    /**
     * Durée de l'exercice déposé, en mois.
     */
    public function getDureeExerciceN(): ?int
    {
        return $this->dureeExerciceN;
    }

    /**
     * Durée de l'exercice déposé, en mois.
     */
    public function setDureeExerciceN(?int $dureeExerciceN): self
    {
        $this->initialized['dureeExerciceN'] = true;
        $this->dureeExerciceN = $dureeExerciceN;

        return $this;
    }

    /**
     * Durée de l'exercice précédent, lorsque présent, en mois.
     */
    public function getDureeExerciceN1(): ?int
    {
        return $this->dureeExerciceN1;
    }

    /**
     * Durée de l'exercice précédent, lorsque présent, en mois.
     */
    public function setDureeExerciceN1(?int $dureeExerciceN1): self
    {
        $this->initialized['dureeExerciceN1'] = true;
        $this->dureeExerciceN1 = $dureeExerciceN1;

        return $this;
    }

    /**
     * Type de comptes (C = complets ; S = simplifiés ; K = consolidés ; CS = mélange complets/simplifiés ; B = banques ; A = assurances).
     */
    public function getTypeComptes(): ?string
    {
        return $this->typeComptes;
    }

    /**
     * Type de comptes (C = complets ; S = simplifiés ; K = consolidés ; CS = mélange complets/simplifiés ; B = banques ; A = assurances).
     */
    public function setTypeComptes(?string $typeComptes): self
    {
        $this->initialized['typeComptes'] = true;
        $this->typeComptes = $typeComptes;

        return $this;
    }

    /**
     * Libellé du type de comptes.
     */
    public function getLibelleTypeComptes(): ?string
    {
        return $this->libelleTypeComptes;
    }

    /**
     * Libellé du type de comptes.
     */
    public function setLibelleTypeComptes(?string $libelleTypeComptes): self
    {
        $this->initialized['libelleTypeComptes'] = true;
        $this->libelleTypeComptes = $libelleTypeComptes;

        return $this;
    }

    /**
     * Devise des comptes.
     */
    public function getDevise(): ?string
    {
        return $this->devise;
    }

    /**
     * Devise des comptes.
     */
    public function setDevise(?string $devise): self
    {
        $this->initialized['devise'] = true;
        $this->devise = $devise;

        return $this;
    }

    /**
     * Devise d'origine en cas de conversion.
     */
    public function getDeviseOrigine(): ?string
    {
        return $this->deviseOrigine;
    }

    /**
     * Devise d'origine en cas de conversion.
     */
    public function setDeviseOrigine(?string $deviseOrigine): self
    {
        $this->initialized['deviseOrigine'] = true;
        $this->deviseOrigine = $deviseOrigine;

        return $this;
    }

    /**
     * Confidentialité totale des comptes.
     */
    public function getConfidentialite(): ?bool
    {
        return $this->confidentialite;
    }

    /**
     * Confidentialité totale des comptes.
     */
    public function setConfidentialite(?bool $confidentialite): self
    {
        $this->initialized['confidentialite'] = true;
        $this->confidentialite = $confidentialite;

        return $this;
    }

    /**
     * Confidentialité partielle des comptes (seul le compte de résultat est confidentiel, le reste des comptes sont disponibles).
     */
    public function getConfidentialiteCompteDeResultat(): ?bool
    {
        return $this->confidentialiteCompteDeResultat;
    }

    /**
     * Confidentialité partielle des comptes (seul le compte de résultat est confidentiel, le reste des comptes sont disponibles).
     */
    public function setConfidentialiteCompteDeResultat(?bool $confidentialiteCompteDeResultat): self
    {
        $this->initialized['confidentialiteCompteDeResultat'] = true;
        $this->confidentialiteCompteDeResultat = $confidentialiteCompteDeResultat;

        return $this;
    }

    /**
     * Vrai si les comptes sont cohérents d'un point de vue comptable (équilibre du bilan par exemple).
     */
    public function getCoherenceComptable(): ?bool
    {
        return $this->coherenceComptable;
    }

    /**
     * Vrai si les comptes sont cohérents d'un point de vue comptable (équilibre du bilan par exemple).
     */
    public function setCoherenceComptable(?bool $coherenceComptable): self
    {
        $this->initialized['coherenceComptable'] = true;
        $this->coherenceComptable = $coherenceComptable;

        return $this;
    }

    /**
     * Description du type de saisie des comptes.
     */
    public function getTypeSaisie(): ?string
    {
        return $this->typeSaisie;
    }

    /**
     * Description du type de saisie des comptes.
     */
    public function setTypeSaisie(?string $typeSaisie): self
    {
        $this->initialized['typeSaisie'] = true;
        $this->typeSaisie = $typeSaisie;

        return $this;
    }

    /**
     * Informations complémentaires sur le traitement des comptes.
     *
     * @return list<string>|null
     */
    public function getInformationsTraitement(): ?array
    {
        return $this->informationsTraitement;
    }

    /**
     * Informations complémentaires sur le traitement des comptes.
     *
     * @param list<string>|null $informationsTraitement
     */
    public function setInformationsTraitement(?array $informationsTraitement): self
    {
        $this->initialized['informationsTraitement'] = true;
        $this->informationsTraitement = $informationsTraitement;

        return $this;
    }

    /**
     * Liste des sections de liasses fiscales.
     *
     * @return list<EntrepriseComptesGetResponse200ItemItemSectionsItem>|null
     */
    public function getSections(): ?array
    {
        return $this->sections;
    }

    /**
     * Liste des sections de liasses fiscales.
     *
     * @param list<EntrepriseComptesGetResponse200ItemItemSectionsItem>|null $sections
     */
    public function setSections(?array $sections): self
    {
        $this->initialized['sections'] = true;
        $this->sections = $sections;

        return $this;
    }

    public function getRatios(): ?Ratios
    {
        return $this->ratios;
    }

    public function setRatios(?Ratios $ratios): self
    {
        $this->initialized['ratios'] = true;
        $this->ratios = $ratios;

        return $this;
    }
}
