<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichemarquesItem extends \ArrayObject
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
     * Numéro de la marque.
     *
     * @var string|null
     */
    protected $numero;
    /**
     * Date d'enregistrement de la marque, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateEnregistrement;
    /**
     * Date d'expiration de la marque au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $dateExpiration;
    /**
     * Lieu d'enregistrement de la marque.
     *
     * @var string|null
     */
    protected $lieuEnregistrement;
    /**
     * Statut de la marque. La description des différents types est disponible en page 14 du document suivant : https://www.inpi.fr/sites/default/files/doctech_marques_v1.6.pdf.
     *
     * @var string|null
     */
    protected $statut;
    /**
     * Texte de la marque.
     *
     * @var string|null
     */
    protected $texte;
    /**
     * Type de la marque.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Lien vers l'image déposée.
     *
     * @var string|null
     */
    protected $lienImage;
    /**
     * Liste des descriptions de la marque.
     *
     * @var list<string>|null
     */
    protected $descriptions;
    /**
     * Liste des classes (produits et services) de la marque. La liste des classes est disponible sur le document suivant : https://www.inpi.fr/sites/default/files/classification_nice_2021_0.pdf.
     *
     * @var list<EntrepriseFichemarquesItemClassesItem>|null
     */
    protected $classes;
    /**
     * @var PersonneMarque|null
     */
    protected $deposant;
    /**
     * @var PersonneMarque|null
     */
    protected $mandataire;
    /**
     * Liste des événements associés à la marque.
     *
     * @var list<EntrepriseFichemarquesItemEvenementsItem>|null
     */
    protected $evenements;

    /**
     * Numéro de la marque.
     */
    public function getNumero(): ?string
    {
        return $this->numero;
    }

    /**
     * Numéro de la marque.
     */
    public function setNumero(?string $numero): self
    {
        $this->initialized['numero'] = true;
        $this->numero = $numero;

        return $this;
    }

    /**
     * Date d'enregistrement de la marque, au format AAAA-MM-JJ.
     */
    public function getDateEnregistrement(): ?string
    {
        return $this->dateEnregistrement;
    }

    /**
     * Date d'enregistrement de la marque, au format AAAA-MM-JJ.
     */
    public function setDateEnregistrement(?string $dateEnregistrement): self
    {
        $this->initialized['dateEnregistrement'] = true;
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Date d'expiration de la marque au format AAAA-MM-JJ.
     */
    public function getDateExpiration(): ?string
    {
        return $this->dateExpiration;
    }

    /**
     * Date d'expiration de la marque au format AAAA-MM-JJ.
     */
    public function setDateExpiration(?string $dateExpiration): self
    {
        $this->initialized['dateExpiration'] = true;
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Lieu d'enregistrement de la marque.
     */
    public function getLieuEnregistrement(): ?string
    {
        return $this->lieuEnregistrement;
    }

    /**
     * Lieu d'enregistrement de la marque.
     */
    public function setLieuEnregistrement(?string $lieuEnregistrement): self
    {
        $this->initialized['lieuEnregistrement'] = true;
        $this->lieuEnregistrement = $lieuEnregistrement;

        return $this;
    }

    /**
     * Statut de la marque. La description des différents types est disponible en page 14 du document suivant : https://www.inpi.fr/sites/default/files/doctech_marques_v1.6.pdf.
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * Statut de la marque. La description des différents types est disponible en page 14 du document suivant : https://www.inpi.fr/sites/default/files/doctech_marques_v1.6.pdf.
     */
    public function setStatut(?string $statut): self
    {
        $this->initialized['statut'] = true;
        $this->statut = $statut;

        return $this;
    }

    /**
     * Texte de la marque.
     */
    public function getTexte(): ?string
    {
        return $this->texte;
    }

    /**
     * Texte de la marque.
     */
    public function setTexte(?string $texte): self
    {
        $this->initialized['texte'] = true;
        $this->texte = $texte;

        return $this;
    }

    /**
     * Type de la marque.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type de la marque.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Lien vers l'image déposée.
     */
    public function getLienImage(): ?string
    {
        return $this->lienImage;
    }

    /**
     * Lien vers l'image déposée.
     */
    public function setLienImage(?string $lienImage): self
    {
        $this->initialized['lienImage'] = true;
        $this->lienImage = $lienImage;

        return $this;
    }

    /**
     * Liste des descriptions de la marque.
     *
     * @return list<string>|null
     */
    public function getDescriptions(): ?array
    {
        return $this->descriptions;
    }

    /**
     * Liste des descriptions de la marque.
     *
     * @param list<string>|null $descriptions
     */
    public function setDescriptions(?array $descriptions): self
    {
        $this->initialized['descriptions'] = true;
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * Liste des classes (produits et services) de la marque. La liste des classes est disponible sur le document suivant : https://www.inpi.fr/sites/default/files/classification_nice_2021_0.pdf.
     *
     * @return list<EntrepriseFichemarquesItemClassesItem>|null
     */
    public function getClasses(): ?array
    {
        return $this->classes;
    }

    /**
     * Liste des classes (produits et services) de la marque. La liste des classes est disponible sur le document suivant : https://www.inpi.fr/sites/default/files/classification_nice_2021_0.pdf.
     *
     * @param list<EntrepriseFichemarquesItemClassesItem>|null $classes
     */
    public function setClasses(?array $classes): self
    {
        $this->initialized['classes'] = true;
        $this->classes = $classes;

        return $this;
    }

    public function getDeposant(): ?PersonneMarque
    {
        return $this->deposant;
    }

    public function setDeposant(?PersonneMarque $deposant): self
    {
        $this->initialized['deposant'] = true;
        $this->deposant = $deposant;

        return $this;
    }

    public function getMandataire(): ?PersonneMarque
    {
        return $this->mandataire;
    }

    public function setMandataire(?PersonneMarque $mandataire): self
    {
        $this->initialized['mandataire'] = true;
        $this->mandataire = $mandataire;

        return $this;
    }

    /**
     * Liste des événements associés à la marque.
     *
     * @return list<EntrepriseFichemarquesItemEvenementsItem>|null
     */
    public function getEvenements(): ?array
    {
        return $this->evenements;
    }

    /**
     * Liste des événements associés à la marque.
     *
     * @param list<EntrepriseFichemarquesItemEvenementsItem>|null $evenements
     */
    public function setEvenements(?array $evenements): self
    {
        $this->initialized['evenements'] = true;
        $this->evenements = $evenements;

        return $this;
    }
}
