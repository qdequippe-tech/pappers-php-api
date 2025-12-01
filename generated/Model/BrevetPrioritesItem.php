<?php

namespace Qdequippe\Pappers\Api\Model;

class BrevetPrioritesItem extends \ArrayObject
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
     * Numéro de priorité.
     *
     * @var string|null
     */
    protected $numero;
    /**
     * Date de priorité au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * Type de priorité.
     *
     * @var string|null
     */
    protected $type;

    /**
     * Numéro de priorité.
     */
    public function getNumero(): ?string
    {
        return $this->numero;
    }

    /**
     * Numéro de priorité.
     */
    public function setNumero(?string $numero): self
    {
        $this->initialized['numero'] = true;
        $this->numero = $numero;

        return $this;
    }

    /**
     * Date de priorité au format AAAA-MM-JJ.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Date de priorité au format AAAA-MM-JJ.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Type de priorité.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type de priorité.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
