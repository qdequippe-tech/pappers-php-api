<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationDirigeantNouvellesSanctionsItem extends \ArrayObject
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
     * Date de la sanction.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Autorité ayant émis la sanction.
     *
     * @var string|null
     */
    protected $autorite;
    /**
     * Description de la sanction.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Pays de l'autorité émettrice.
     *
     * @var string|null
     */
    protected $pays;
    /**
     * Code du pays de l'autorité émettrice.
     *
     * @var string|null
     */
    protected $codePays;

    /**
     * Date de la sanction.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de la sanction.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Autorité ayant émis la sanction.
     */
    public function getAutorite(): ?string
    {
        return $this->autorite;
    }

    /**
     * Autorité ayant émis la sanction.
     */
    public function setAutorite(?string $autorite): self
    {
        $this->initialized['autorite'] = true;
        $this->autorite = $autorite;

        return $this;
    }

    /**
     * Description de la sanction.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Description de la sanction.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Pays de l'autorité émettrice.
     */
    public function getPays(): ?string
    {
        return $this->pays;
    }

    /**
     * Pays de l'autorité émettrice.
     */
    public function setPays(?string $pays): self
    {
        $this->initialized['pays'] = true;
        $this->pays = $pays;

        return $this;
    }

    /**
     * Code du pays de l'autorité émettrice.
     */
    public function getCodePays(): ?string
    {
        return $this->codePays;
    }

    /**
     * Code du pays de l'autorité émettrice.
     */
    public function setCodePays(?string $codePays): self
    {
        $this->initialized['codePays'] = true;
        $this->codePays = $codePays;

        return $this;
    }
}
