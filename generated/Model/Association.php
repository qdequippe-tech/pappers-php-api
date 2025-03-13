<?php

namespace Qdequippe\Pappers\Api\Model;

class Association extends \ArrayObject
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
     * Détermine si l'association possède un numéro WALDEC/RNA.
     *
     * @var bool|null
     */
    protected $isWaldec;
    /**
     * L'identifiant l'association au format Wxxxxxxxxx si WALDEC, xxxxxxxxxxxxxx sinon.
     *
     * @var string|null
     */
    protected $idAssociation;
    /**
     * Ancien numéro de l'association.
     *
     * @var string|null
     */
    protected $idExAssociation;
    /**
     * Dénomination de l'association.
     *
     * @var string|null
     */
    protected $denomination;
    /**
     * Numéro siret de l'association au format xxxxxxxxxxxxxx.
     *
     * @var string|null
     */
    protected $siret;
    /**
     * Numéro de Reconnaissance d'Utilité Publique.
     *
     * @var string|null
     */
    protected $numeroRup;
    /**
     * Objet de l'association.
     *
     * @var string|null
     */
    protected $objet;
    /**
     * Objet social 1 de l'association.
     *
     * @var string|null
     */
    protected $objetSocial1;
    /**
     * Libellé correspondant à l'objet social 1.
     *
     * @var string|null
     */
    protected $categorieSocial1;
    /**
     * Objet social 2 de l'association.
     *
     * @var string|null
     */
    protected $objetSocial2;
    /**
     * Libellé correspondant à l'objet social 1.
     *
     * @var string|null
     */
    protected $categorieSocial2;
    /**
     * Date de déclaration de création au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateCreation;
    /**
     * Date de dernière déclaration au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateDerniereDeclaration;
    /**
     * Date de publication du Journal Officiel de l'avis de création au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $datePublicationCreation;
    /**
     * Date de déclaration de dissolution au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateDeclarationDissolution;
    /**
     * Groupement de l'association.
     *
     * @var string|null
     */
    protected $groupement;
    /**
     * Position d'activité de l'association.
     *
     * @var string|null
     */
    protected $positionActivite;
    /**
     * Nature de l'association.
     *
     * @var string|null
     */
    protected $nature;
    /**
     * Site web de l'association.
     *
     * @var string|null
     */
    protected $siteWeb;
    /**
     * Numéro de téléphone de l'association.
     *
     * @var string|null
     */
    protected $telephone;
    /**
     * Email de l'association.
     *
     * @var string|null
     */
    protected $email;
    /**
     * @var AssociationAdresseSiege|null
     */
    protected $adresseSiege;
    /**
     * @var AssociationAdresseGestionnaire|null
     */
    protected $adresseGestionnaire;
    /**
     * Observation relative à l'association.
     *
     * @var string|null
     */
    protected $observation;
    /**
     * Code du site gestionnaire (préfecture, sous-préfecture) de l'association.
     *
     * @var string|null
     */
    protected $codeGestion;
    /**
     * Civilité du dirigeant.
     *
     * @var string|null
     */
    protected $dirigeantCivilite;
    /**
     * Date de la dernière mise à jour des informations au RNA au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $derniereMaj;
    /**
     * Publications JOAFE.
     *
     * @var list<AssociationPublicationsJoafeItem>|null
     */
    protected $publicationsJoafe;

    /**
     * Détermine si l'association possède un numéro WALDEC/RNA.
     */
    public function getIsWaldec(): ?bool
    {
        return $this->isWaldec;
    }

    /**
     * Détermine si l'association possède un numéro WALDEC/RNA.
     */
    public function setIsWaldec(?bool $isWaldec): self
    {
        $this->initialized['isWaldec'] = true;
        $this->isWaldec = $isWaldec;

        return $this;
    }

    /**
     * L'identifiant l'association au format Wxxxxxxxxx si WALDEC, xxxxxxxxxxxxxx sinon.
     */
    public function getIdAssociation(): ?string
    {
        return $this->idAssociation;
    }

    /**
     * L'identifiant l'association au format Wxxxxxxxxx si WALDEC, xxxxxxxxxxxxxx sinon.
     */
    public function setIdAssociation(?string $idAssociation): self
    {
        $this->initialized['idAssociation'] = true;
        $this->idAssociation = $idAssociation;

        return $this;
    }

    /**
     * Ancien numéro de l'association.
     */
    public function getIdExAssociation(): ?string
    {
        return $this->idExAssociation;
    }

    /**
     * Ancien numéro de l'association.
     */
    public function setIdExAssociation(?string $idExAssociation): self
    {
        $this->initialized['idExAssociation'] = true;
        $this->idExAssociation = $idExAssociation;

        return $this;
    }

    /**
     * Dénomination de l'association.
     */
    public function getDenomination(): ?string
    {
        return $this->denomination;
    }

    /**
     * Dénomination de l'association.
     */
    public function setDenomination(?string $denomination): self
    {
        $this->initialized['denomination'] = true;
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Numéro siret de l'association au format xxxxxxxxxxxxxx.
     */
    public function getSiret(): ?string
    {
        return $this->siret;
    }

    /**
     * Numéro siret de l'association au format xxxxxxxxxxxxxx.
     */
    public function setSiret(?string $siret): self
    {
        $this->initialized['siret'] = true;
        $this->siret = $siret;

        return $this;
    }

    /**
     * Numéro de Reconnaissance d'Utilité Publique.
     */
    public function getNumeroRup(): ?string
    {
        return $this->numeroRup;
    }

    /**
     * Numéro de Reconnaissance d'Utilité Publique.
     */
    public function setNumeroRup(?string $numeroRup): self
    {
        $this->initialized['numeroRup'] = true;
        $this->numeroRup = $numeroRup;

        return $this;
    }

    /**
     * Objet de l'association.
     */
    public function getObjet(): ?string
    {
        return $this->objet;
    }

    /**
     * Objet de l'association.
     */
    public function setObjet(?string $objet): self
    {
        $this->initialized['objet'] = true;
        $this->objet = $objet;

        return $this;
    }

    /**
     * Objet social 1 de l'association.
     */
    public function getObjetSocial1(): ?string
    {
        return $this->objetSocial1;
    }

    /**
     * Objet social 1 de l'association.
     */
    public function setObjetSocial1(?string $objetSocial1): self
    {
        $this->initialized['objetSocial1'] = true;
        $this->objetSocial1 = $objetSocial1;

        return $this;
    }

    /**
     * Libellé correspondant à l'objet social 1.
     */
    public function getCategorieSocial1(): ?string
    {
        return $this->categorieSocial1;
    }

    /**
     * Libellé correspondant à l'objet social 1.
     */
    public function setCategorieSocial1(?string $categorieSocial1): self
    {
        $this->initialized['categorieSocial1'] = true;
        $this->categorieSocial1 = $categorieSocial1;

        return $this;
    }

    /**
     * Objet social 2 de l'association.
     */
    public function getObjetSocial2(): ?string
    {
        return $this->objetSocial2;
    }

    /**
     * Objet social 2 de l'association.
     */
    public function setObjetSocial2(?string $objetSocial2): self
    {
        $this->initialized['objetSocial2'] = true;
        $this->objetSocial2 = $objetSocial2;

        return $this;
    }

    /**
     * Libellé correspondant à l'objet social 1.
     */
    public function getCategorieSocial2(): ?string
    {
        return $this->categorieSocial2;
    }

    /**
     * Libellé correspondant à l'objet social 1.
     */
    public function setCategorieSocial2(?string $categorieSocial2): self
    {
        $this->initialized['categorieSocial2'] = true;
        $this->categorieSocial2 = $categorieSocial2;

        return $this;
    }

    /**
     * Date de déclaration de création au format AAAA-MM-JJ.
     */
    public function getDateCreation(): ?string
    {
        return $this->dateCreation;
    }

    /**
     * Date de déclaration de création au format AAAA-MM-JJ.
     */
    public function setDateCreation(?string $dateCreation): self
    {
        $this->initialized['dateCreation'] = true;
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Date de dernière déclaration au format AAAA-MM-JJ.
     */
    public function getDateDerniereDeclaration(): ?string
    {
        return $this->dateDerniereDeclaration;
    }

    /**
     * Date de dernière déclaration au format AAAA-MM-JJ.
     */
    public function setDateDerniereDeclaration(?string $dateDerniereDeclaration): self
    {
        $this->initialized['dateDerniereDeclaration'] = true;
        $this->dateDerniereDeclaration = $dateDerniereDeclaration;

        return $this;
    }

    /**
     * Date de publication du Journal Officiel de l'avis de création au format AAAA-MM-JJ.
     */
    public function getDatePublicationCreation(): ?string
    {
        return $this->datePublicationCreation;
    }

    /**
     * Date de publication du Journal Officiel de l'avis de création au format AAAA-MM-JJ.
     */
    public function setDatePublicationCreation(?string $datePublicationCreation): self
    {
        $this->initialized['datePublicationCreation'] = true;
        $this->datePublicationCreation = $datePublicationCreation;

        return $this;
    }

    /**
     * Date de déclaration de dissolution au format AAAA-MM-JJ.
     */
    public function getDateDeclarationDissolution(): ?string
    {
        return $this->dateDeclarationDissolution;
    }

    /**
     * Date de déclaration de dissolution au format AAAA-MM-JJ.
     */
    public function setDateDeclarationDissolution(?string $dateDeclarationDissolution): self
    {
        $this->initialized['dateDeclarationDissolution'] = true;
        $this->dateDeclarationDissolution = $dateDeclarationDissolution;

        return $this;
    }

    /**
     * Groupement de l'association.
     */
    public function getGroupement(): ?string
    {
        return $this->groupement;
    }

    /**
     * Groupement de l'association.
     */
    public function setGroupement(?string $groupement): self
    {
        $this->initialized['groupement'] = true;
        $this->groupement = $groupement;

        return $this;
    }

    /**
     * Position d'activité de l'association.
     */
    public function getPositionActivite(): ?string
    {
        return $this->positionActivite;
    }

    /**
     * Position d'activité de l'association.
     */
    public function setPositionActivite(?string $positionActivite): self
    {
        $this->initialized['positionActivite'] = true;
        $this->positionActivite = $positionActivite;

        return $this;
    }

    /**
     * Nature de l'association.
     */
    public function getNature(): ?string
    {
        return $this->nature;
    }

    /**
     * Nature de l'association.
     */
    public function setNature(?string $nature): self
    {
        $this->initialized['nature'] = true;
        $this->nature = $nature;

        return $this;
    }

    /**
     * Site web de l'association.
     */
    public function getSiteWeb(): ?string
    {
        return $this->siteWeb;
    }

    /**
     * Site web de l'association.
     */
    public function setSiteWeb(?string $siteWeb): self
    {
        $this->initialized['siteWeb'] = true;
        $this->siteWeb = $siteWeb;

        return $this;
    }

    /**
     * Numéro de téléphone de l'association.
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * Numéro de téléphone de l'association.
     */
    public function setTelephone(?string $telephone): self
    {
        $this->initialized['telephone'] = true;
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Email de l'association.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Email de l'association.
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    public function getAdresseSiege(): ?AssociationAdresseSiege
    {
        return $this->adresseSiege;
    }

    public function setAdresseSiege(?AssociationAdresseSiege $adresseSiege): self
    {
        $this->initialized['adresseSiege'] = true;
        $this->adresseSiege = $adresseSiege;

        return $this;
    }

    public function getAdresseGestionnaire(): ?AssociationAdresseGestionnaire
    {
        return $this->adresseGestionnaire;
    }

    public function setAdresseGestionnaire(?AssociationAdresseGestionnaire $adresseGestionnaire): self
    {
        $this->initialized['adresseGestionnaire'] = true;
        $this->adresseGestionnaire = $adresseGestionnaire;

        return $this;
    }

    /**
     * Observation relative à l'association.
     */
    public function getObservation(): ?string
    {
        return $this->observation;
    }

    /**
     * Observation relative à l'association.
     */
    public function setObservation(?string $observation): self
    {
        $this->initialized['observation'] = true;
        $this->observation = $observation;

        return $this;
    }

    /**
     * Code du site gestionnaire (préfecture, sous-préfecture) de l'association.
     */
    public function getCodeGestion(): ?string
    {
        return $this->codeGestion;
    }

    /**
     * Code du site gestionnaire (préfecture, sous-préfecture) de l'association.
     */
    public function setCodeGestion(?string $codeGestion): self
    {
        $this->initialized['codeGestion'] = true;
        $this->codeGestion = $codeGestion;

        return $this;
    }

    /**
     * Civilité du dirigeant.
     */
    public function getDirigeantCivilite(): ?string
    {
        return $this->dirigeantCivilite;
    }

    /**
     * Civilité du dirigeant.
     */
    public function setDirigeantCivilite(?string $dirigeantCivilite): self
    {
        $this->initialized['dirigeantCivilite'] = true;
        $this->dirigeantCivilite = $dirigeantCivilite;

        return $this;
    }

    /**
     * Date de la dernière mise à jour des informations au RNA au format AAAA-MM-JJ.
     */
    public function getDerniereMaj(): ?string
    {
        return $this->derniereMaj;
    }

    /**
     * Date de la dernière mise à jour des informations au RNA au format AAAA-MM-JJ.
     */
    public function setDerniereMaj(?string $derniereMaj): self
    {
        $this->initialized['derniereMaj'] = true;
        $this->derniereMaj = $derniereMaj;

        return $this;
    }

    /**
     * Publications JOAFE.
     *
     * @return list<AssociationPublicationsJoafeItem>|null
     */
    public function getPublicationsJoafe(): ?array
    {
        return $this->publicationsJoafe;
    }

    /**
     * Publications JOAFE.
     *
     * @param list<AssociationPublicationsJoafeItem>|null $publicationsJoafe
     */
    public function setPublicationsJoafe(?array $publicationsJoafe): self
    {
        $this->initialized['publicationsJoafe'] = true;
        $this->publicationsJoafe = $publicationsJoafe;

        return $this;
    }
}
