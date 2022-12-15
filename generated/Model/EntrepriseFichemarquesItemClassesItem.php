<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichemarquesItemClassesItem extends \ArrayObject
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
     * Code de la classe.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Description de la classe.
     *
     * @var string|null
     */
    protected $description;

    /**
     * Code de la classe.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Code de la classe.
     */
    public function setCode(?string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * Description de la classe.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Description de la classe.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }
}
