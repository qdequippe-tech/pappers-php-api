<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheinformationsBoursieresDocumentsItem extends \ArrayObject
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
     * Nom du document boursier.
     *
     * @var string|null
     */
    protected $nom;
    /**
     * Type du document.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Sous-type du document.
     *
     * @var string|null
     */
    protected $sousType;
    /**
     * URL du document boursier.
     *
     * @var string|null
     */
    protected $url;
    /**
     * Langue du document boursier.
     *
     * @var string|null
     */
    protected $langue;
    /**
     * Date du document boursier, au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;

    /**
     * Nom du document boursier.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Nom du document boursier.
     */
    public function setNom(?string $nom): self
    {
        $this->initialized['nom'] = true;
        $this->nom = $nom;

        return $this;
    }

    /**
     * Type du document.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type du document.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Sous-type du document.
     */
    public function getSousType(): ?string
    {
        return $this->sousType;
    }

    /**
     * Sous-type du document.
     */
    public function setSousType(?string $sousType): self
    {
        $this->initialized['sousType'] = true;
        $this->sousType = $sousType;

        return $this;
    }

    /**
     * URL du document boursier.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * URL du document boursier.
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Langue du document boursier.
     */
    public function getLangue(): ?string
    {
        return $this->langue;
    }

    /**
     * Langue du document boursier.
     */
    public function setLangue(?string $langue): self
    {
        $this->initialized['langue'] = true;
        $this->langue = $langue;

        return $this;
    }

    /**
     * Date du document boursier, au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date du document boursier, au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }
}
