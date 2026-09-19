<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class NotificationDirigeantEntreprisesItemNouvelleAnnonceProcedureCollectivePublieeItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Annonce de la publication.
     *
     * @var string|null
     */
    protected $annonce;
    /**
     * Type de l'annonce.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Type de la procédure collective parmi la liste suivante : Liquidation judiciaire, Redressement judiciaire, Procédure de sauvegarde, ou Autre procédure collective.
     *
     * @var string|null
     */
    protected $typeProcedureCollective;
    /**
     * Date de publication de l'annonce au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Numéro de parution de l'annonce.
     *
     * @var string|null
     */
    protected $numeroParution;
    /**
     * Numéro de Bodacc de l'annonce.
     *
     * @var string|null
     */
    protected $bodacc;
    /**
     * Numéro de l'annonce.
     *
     * @var string|null
     */
    protected $numeroAnnonce;

    /**
     * Annonce de la publication.
     */
    public function getAnnonce(): ?string
    {
        return $this->annonce;
    }

    /**
     * Annonce de la publication.
     */
    public function setAnnonce(?string $annonce): self
    {
        $this->initialized['annonce'] = true;
        $this->annonce = $annonce;

        return $this;
    }

    /**
     * Type de l'annonce.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type de l'annonce.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Type de la procédure collective parmi la liste suivante : Liquidation judiciaire, Redressement judiciaire, Procédure de sauvegarde, ou Autre procédure collective.
     */
    public function getTypeProcedureCollective(): ?string
    {
        return $this->typeProcedureCollective;
    }

    /**
     * Type de la procédure collective parmi la liste suivante : Liquidation judiciaire, Redressement judiciaire, Procédure de sauvegarde, ou Autre procédure collective.
     */
    public function setTypeProcedureCollective(?string $typeProcedureCollective): self
    {
        $this->initialized['typeProcedureCollective'] = true;
        $this->typeProcedureCollective = $typeProcedureCollective;

        return $this;
    }

    /**
     * Date de publication de l'annonce au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de publication de l'annonce au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Numéro de parution de l'annonce.
     */
    public function getNumeroParution(): ?string
    {
        return $this->numeroParution;
    }

    /**
     * Numéro de parution de l'annonce.
     */
    public function setNumeroParution(?string $numeroParution): self
    {
        $this->initialized['numeroParution'] = true;
        $this->numeroParution = $numeroParution;

        return $this;
    }

    /**
     * Numéro de Bodacc de l'annonce.
     */
    public function getBodacc(): ?string
    {
        return $this->bodacc;
    }

    /**
     * Numéro de Bodacc de l'annonce.
     */
    public function setBodacc(?string $bodacc): self
    {
        $this->initialized['bodacc'] = true;
        $this->bodacc = $bodacc;

        return $this;
    }

    /**
     * Numéro de l'annonce.
     */
    public function getNumeroAnnonce(): ?string
    {
        return $this->numeroAnnonce;
    }

    /**
     * Numéro de l'annonce.
     */
    public function setNumeroAnnonce(?string $numeroAnnonce): self
    {
        $this->initialized['numeroAnnonce'] = true;
        $this->numeroAnnonce = $numeroAnnonce;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['annonce' => ['annonce', 'getAnnonce', 'setAnnonce'], 'type' => ['type', 'getType', 'setType'], 'typeProcedureCollective' => ['type_procedure_collective', 'getTypeProcedureCollective', 'setTypeProcedureCollective'], 'date' => ['date', 'getDate', 'setDate'], 'numeroParution' => ['numero_parution', 'getNumeroParution', 'setNumeroParution'], 'bodacc' => ['bodacc', 'getBodacc', 'setBodacc'], 'numeroAnnonce' => ['numero_annonce', 'getNumeroAnnonce', 'setNumeroAnnonce']];
    }
}
