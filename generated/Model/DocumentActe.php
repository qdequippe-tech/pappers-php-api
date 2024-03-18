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
     * @var list<DocumentActetitresItem>|null
     */
    protected $titres;

    /**
     * Titres des actes associés au document.
     *
     * @return list<DocumentActetitresItem>|null
     */
    public function getTitres(): ?array
    {
        return $this->titres;
    }

    /**
     * Titres des actes associés au document.
     *
     * @param list<DocumentActetitresItem>|null $titres
     */
    public function setTitres(?array $titres): self
    {
        $this->initialized['titres'] = true;
        $this->titres = $titres;

        return $this;
    }
}
