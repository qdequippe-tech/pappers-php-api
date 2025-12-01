<?php

namespace Qdequippe\Pappers\Api\Model;

class NotificationEntrepriseNouveauxStatutsPubliesItem extends \ArrayObject
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
     * Acte publié.
     *
     * @var string|null
     */
    protected $acte;
    /**
     * Date de publication de l'acte au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;
    /**
     * Token.
     *
     * @var string|null
     */
    protected $token;

    /**
     * Acte publié.
     */
    public function getActe(): ?string
    {
        return $this->acte;
    }

    /**
     * Acte publié.
     */
    public function setActe(?string $acte): self
    {
        $this->initialized['acte'] = true;
        $this->acte = $acte;

        return $this;
    }

    /**
     * Date de publication de l'acte au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de publication de l'acte au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Token.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Token.
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }
}
