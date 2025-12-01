<?php

namespace Qdequippe\Pappers\Api\Model;

class BrevetPublication extends \ArrayObject
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
     * Type de publication.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Nature de la publication.
     *
     * @var string|null
     */
    protected $nature;
    /**
     * Date de publication au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * Numéro de publication.
     *
     * @var string|null
     */
    protected $numero;

    /**
     * Type de publication.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type de publication.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Nature de la publication.
     */
    public function getNature(): ?string
    {
        return $this->nature;
    }

    /**
     * Nature de la publication.
     */
    public function setNature(?string $nature): self
    {
        $this->initialized['nature'] = true;
        $this->nature = $nature;

        return $this;
    }

    /**
     * Date de publication au format AAAA-MM-JJ.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Date de publication au format AAAA-MM-JJ.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Numéro de publication.
     */
    public function getNumero(): ?string
    {
        return $this->numero;
    }

    /**
     * Numéro de publication.
     */
    public function setNumero(?string $numero): self
    {
        $this->initialized['numero'] = true;
        $this->numero = $numero;

        return $this;
    }
}
