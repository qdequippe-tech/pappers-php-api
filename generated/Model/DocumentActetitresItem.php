<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class DocumentActetitresItem extends \ArrayObject
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
     * Type de l'acte.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Décision de l'acte.
     *
     * @var string|null
     */
    protected $decision;

    /**
     * Type de l'acte.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type de l'acte.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Décision de l'acte.
     */
    public function getDecision(): ?string
    {
        return $this->decision;
    }

    /**
     * Décision de l'acte.
     */
    public function setDecision(?string $decision): self
    {
        $this->initialized['decision'] = true;
        $this->decision = $decision;

        return $this;
    }
}
