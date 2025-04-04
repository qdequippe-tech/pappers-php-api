<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationVeilleEntrepriseEmployeuse extends \ArrayObject
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
     * @var bool|null
     */
    protected $valeur;
    /**
     * Date de modification de l'activité de l'entreprise au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;

    public function getValeur(): ?bool
    {
        return $this->valeur;
    }

    public function setValeur(?bool $valeur): self
    {
        $this->initialized['valeur'] = true;
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Date de modification de l'activité de l'entreprise au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de modification de l'activité de l'entreprise au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
