<?php

namespace Qdequippe\Pappers\Api\Model;

class PersonnePolitiquementExposeeFonctionsItemSourcesItem extends \ArrayObject
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
     * Nom de la source.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Lien vers la source.
     *
     * @var string|null
     */
    protected $url;

    /**
     * Nom de la source.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom de la source.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Lien vers la source.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Lien vers la source.
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }
}
