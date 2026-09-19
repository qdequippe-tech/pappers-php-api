<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class Document implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * Token du document.
     *
     * @var string|null
     */
    protected $token;
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
    public function setType(?string $type): void
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }

    /**
     * Token du document.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Token du document.
     */
    public function setToken(?string $token): void
    {
        $this->initialized['token'] = true;
        $this->token = $token;
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
    public function setDateDepot(?\DateTime $dateDepot): void
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
    public function setMentions(?array $mentions): void
    {
        $this->initialized['mentions'] = true;
        $this->mentions = $mentions;
    }

    public function definedProperties(): array
    {
        return ['type' => ['type', 'getType', 'setType'], 'token' => ['token', 'getToken', 'setToken'], 'dateDepot' => ['date_depot', 'getDateDepot', 'setDateDepot'], 'mentions' => ['mentions', 'getMentions', 'setMentions']];
    }
}
