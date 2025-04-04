<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationDirigeantNouveauxMandatsPolitiquesItem extends \ArrayObject
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
     * Date du mandat politique.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Fonction politique.
     *
     * @var string|null
     */
    protected $fonction;
    /**
     * Pays de la fonction politique.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Code du pays de la fonction politique.
     *
     * @var string|null
     */
    protected $codePays;

    /**
     * Date du mandat politique.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date du mandat politique.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Fonction politique.
     */
    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    /**
     * Fonction politique.
     */
    public function setFonction(?string $fonction): self
    {
        $this->initialized['fonction'] = true;
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Pays de la fonction politique.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays de la fonction politique.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code du pays de la fonction politique.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code du pays de la fonction politique.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }
}
