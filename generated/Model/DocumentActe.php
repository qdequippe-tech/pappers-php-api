<?php

namespace Qdequippe\Pappers\Api\Model;

class DocumentActe extends Document
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
     * Titres des actes associés au document.
     *
     * @var list<DocumentActeTitresItem>|null
     */
    protected $titres;

    /**
     * Titres des actes associés au document.
     *
     * @return list<DocumentActeTitresItem>|null
     */
    public function getTitres(): ?array
    {
        return $this->titres;
    }

    /**
     * Titres des actes associés au document.
     *
     * @param list<DocumentActeTitresItem>|null $titres
     */
    public function setTitres(?array $titres): self
    {
        $this->initialized['titres'] = true;
        $this->titres = $titres;

        return $this;
    }

    public function definedProperties(): array
    {
        return array_merge(parent::definedProperties(), ['titres' => ['titres', 'getTitres', 'setTitres']]);
    }
}
