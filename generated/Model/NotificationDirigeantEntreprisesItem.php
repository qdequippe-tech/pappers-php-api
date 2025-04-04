<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationDirigeantEntreprisesItem extends \ArrayObject
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
     * Nouveau mandat.
     *
     * @var NotificationDirigeantEntreprisesItemNouveauMandat|null
     */
    protected $nouveauMandat;
    /**
     * Mandat supprimé.
     *
     * @var NotificationDirigeantEntreprisesItemMandatSupprime|null
     */
    protected $mandatSupprime;
    /**
     * Qualité du dirigeant.
     *
     * @var NotificationDirigeantEntreprisesItemQualiteDirigeant|null
     */
    protected $qualiteDirigeant;
    /**
     * Nouvelles annonces de procédure collective publiées pour l'entreprise.
     *
     * @var list<NotificationDirigeantEntreprisesItemNouvelleAnnonceProcedureCollectivePublieeItem>|null
     */
    protected $nouvelleAnnonceProcedureCollectivePubliee;

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
     * Nouveau mandat.
     */
    public function getNouveauMandat(): ?NotificationDirigeantEntreprisesItemNouveauMandat
    {
        return $this->nouveauMandat;
    }

    /**
     * Nouveau mandat.
     */
    public function setNouveauMandat(?NotificationDirigeantEntreprisesItemNouveauMandat $nouveauMandat): self
    {
        $this->initialized['nouveauMandat'] = true;
        $this->nouveauMandat = $nouveauMandat;

        return $this;
    }

    /**
     * Mandat supprimé.
     */
    public function getMandatSupprime(): ?NotificationDirigeantEntreprisesItemMandatSupprime
    {
        return $this->mandatSupprime;
    }

    /**
     * Mandat supprimé.
     */
    public function setMandatSupprime(?NotificationDirigeantEntreprisesItemMandatSupprime $mandatSupprime): self
    {
        $this->initialized['mandatSupprime'] = true;
        $this->mandatSupprime = $mandatSupprime;

        return $this;
    }

    /**
     * Qualité du dirigeant.
     */
    public function getQualiteDirigeant(): ?NotificationDirigeantEntreprisesItemQualiteDirigeant
    {
        return $this->qualiteDirigeant;
    }

    /**
     * Qualité du dirigeant.
     */
    public function setQualiteDirigeant(?NotificationDirigeantEntreprisesItemQualiteDirigeant $qualiteDirigeant): self
    {
        $this->initialized['qualiteDirigeant'] = true;
        $this->qualiteDirigeant = $qualiteDirigeant;

        return $this;
    }

    /**
     * Nouvelles annonces de procédure collective publiées pour l'entreprise.
     *
     * @return list<NotificationDirigeantEntreprisesItemNouvelleAnnonceProcedureCollectivePublieeItem>|null
     */
    public function getNouvelleAnnonceProcedureCollectivePubliee(): ?array
    {
        return $this->nouvelleAnnonceProcedureCollectivePubliee;
    }

    /**
     * Nouvelles annonces de procédure collective publiées pour l'entreprise.
     *
     * @param list<NotificationDirigeantEntreprisesItemNouvelleAnnonceProcedureCollectivePublieeItem>|null $nouvelleAnnonceProcedureCollectivePubliee
     */
    public function setNouvelleAnnonceProcedureCollectivePubliee(?array $nouvelleAnnonceProcedureCollectivePubliee): self
    {
        $this->initialized['nouvelleAnnonceProcedureCollectivePubliee'] = true;
        $this->nouvelleAnnonceProcedureCollectivePubliee = $nouvelleAnnonceProcedureCollectivePubliee;

        return $this;
    }
}
