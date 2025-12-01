<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseCiteeMentionsItem extends \ArrayObject
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
     * SIREN de l'entreprise mentionnée.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Date de la mention au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $date;
    /**
     * Token de la mention.
     *
     * @var string|null
     */
    protected $token;
    /**
     * Liste des mentions textuelles.
     *
     * @var list<string>|null
     */
    protected $mentions;

    /**
     * SIREN de l'entreprise mentionnée.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de l'entreprise mentionnée.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Date de la mention au format AAAA-MM-JJ.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Date de la mention au format AAAA-MM-JJ.
     */
    public function setDate(?\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    /**
     * Token de la mention.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Token de la mention.
     */
    public function setToken(?string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }

    /**
     * Liste des mentions textuelles.
     *
     * @return list<string>|null
     */
    public function getMentions(): ?array
    {
        return $this->mentions;
    }

    /**
     * Liste des mentions textuelles.
     *
     * @param list<string>|null $mentions
     */
    public function setMentions(?array $mentions): self
    {
        $this->initialized['mentions'] = true;
        $this->mentions = $mentions;

        return $this;
    }
}
