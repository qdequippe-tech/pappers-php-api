<?php

namespace Qdequippe\Pappers\Api\Model;

class Document extends \ArrayObject
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
     * Type de document.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Date de dépôt du document.
     *
     * @var \DateTime|null
     */
    protected $dateDepot;
    /**
     * Mentions de la recherche dans le document.
     *
     * @var list<string>|null
     */
    protected $mentions;

    /**
     * Type de document.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type de document.
     */
    public function setType(?string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }

    /**
     * Date de dépôt du document.
     */
    public function getDateDepot(): ?\DateTime
    {
        return $this->dateDepot;
    }

    /**
     * Date de dépôt du document.
     */
    public function setDateDepot(?\DateTime $dateDepot)
    {
        $this->initialized['dateDepot'] = true;
        $this->dateDepot = $dateDepot;
    }

    /**
     * Mentions de la recherche dans le document.
     *
     * @return list<string>|null
     */
    public function getMentions(): ?array
    {
        return $this->mentions;
    }

    /**
     * Mentions de la recherche dans le document.
     *
     * @param list<string>|null $mentions
     */
    public function setMentions(?array $mentions)
    {
        $this->initialized['mentions'] = true;
        $this->mentions = $mentions;
    }
}
