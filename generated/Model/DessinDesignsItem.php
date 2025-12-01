<?php

namespace Qdequippe\Pappers\Api\Model;

class DessinDesignsItem extends \ArrayObject
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
     * Titre du design.
     *
     * @var string|null
     */
    protected $titre;
    /**
     * Référence du design.
     *
     * @var string|null
     */
    protected $ref;
    /**
     * Date d'expiration du design au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateExpiration;

    /**
     * Titre du design.
     */
    public function getTitre(): ?string
    {
        return $this->titre;
    }

    /**
     * Titre du design.
     */
    public function setTitre(?string $titre): self
    {
        $this->initialized['titre'] = true;
        $this->titre = $titre;

        return $this;
    }

    /**
     * Référence du design.
     */
    public function getRef(): ?string
    {
        return $this->ref;
    }

    /**
     * Référence du design.
     */
    public function setRef(?string $ref): self
    {
        $this->initialized['ref'] = true;
        $this->ref = $ref;

        return $this;
    }

    /**
     * Date d'expiration du design au format AAAA-MM-JJ.
     */
    public function getDateExpiration(): ?\DateTime
    {
        return $this->dateExpiration;
    }

    /**
     * Date d'expiration du design au format AAAA-MM-JJ.
     */
    public function setDateExpiration(?\DateTime $dateExpiration): self
    {
        $this->initialized['dateExpiration'] = true;
        $this->dateExpiration = $dateExpiration;

        return $this;
    }
}
