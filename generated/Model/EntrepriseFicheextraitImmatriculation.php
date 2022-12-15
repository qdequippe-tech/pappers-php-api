<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheextraitImmatriculation extends \ArrayObject
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
     * Token.
     *
     * @var string|null
     */
    protected $token;

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
