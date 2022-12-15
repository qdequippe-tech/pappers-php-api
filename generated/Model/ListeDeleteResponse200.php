<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class ListeDeleteResponse200 extends \ArrayObject
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
     * Le nombre de notifications supprimées de votre liste de surveillance.
     *
     * @var float
     */
    protected $notificationsSupprimees;

    /**
     * Le nombre de notifications supprimées de votre liste de surveillance.
     */
    public function getNotificationsSupprimees(): float
    {
        return $this->notificationsSupprimees;
    }

    /**
     * Le nombre de notifications supprimées de votre liste de surveillance.
     */
    public function setNotificationsSupprimees(float $notificationsSupprimees): self
    {
        $this->initialized['notificationsSupprimees'] = true;
        $this->notificationsSupprimees = $notificationsSupprimees;

        return $this;
    }
}
