<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class ListeDeleteResponse200 implements AdditionalPropertiesInterface
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
     * Le nombre de notifications supprimées de votre liste de surveillance.
     *
     * @var float|null
     */
    protected $notificationsSupprimees;

    /**
     * Le nombre de notifications supprimées de votre liste de surveillance.
     */
    public function getNotificationsSupprimees(): ?float
    {
        return $this->notificationsSupprimees;
    }

    /**
     * Le nombre de notifications supprimées de votre liste de surveillance.
     */
    public function setNotificationsSupprimees(?float $notificationsSupprimees): self
    {
        $this->initialized['notificationsSupprimees'] = true;
        $this->notificationsSupprimees = $notificationsSupprimees;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['notificationsSupprimees' => ['notifications_supprimees', 'getNotificationsSupprimees', 'setNotificationsSupprimees']];
    }
}
