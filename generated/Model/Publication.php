<?php

namespace Qdequippe\Pappers\Api\Model;

class Publication extends \ArrayObject
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
     * Date de publication, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * Contenu de la publication, avec les mentions correspondant à la recherche encerclée par une balise HTML <em>.
     *
     * @var string|null
     */
    protected $contenu;

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
     * Date de publication, au format AAAA-MM-JJ.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Date de publication, au format AAAA-MM-JJ.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Contenu de la publication, avec les mentions correspondant à la recherche encerclée par une balise HTML <em>.
     */
    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    /**
     * Contenu de la publication, avec les mentions correspondant à la recherche encerclée par une balise HTML <em>.
     */
    public function setContenu(?string $contenu): self
    {
        $this->initialized['contenu'] = true;
        $this->contenu = $contenu;

        return $this;
    }
}
