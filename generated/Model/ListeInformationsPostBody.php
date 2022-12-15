<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class ListeInformationsPostBody extends \ArrayObject
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
     * Tableau d'identifiant de notifications.
     *
     * @var string[]
     */
    protected $notifications;
    /**
     * Information à rajouter sur les notifications.
     *
     * @var string
     */
    protected $informations;

    /**
     * Tableau d'identifiant de notifications.
     *
     * @return string[]
     */
    public function getNotifications(): array
    {
        return $this->notifications;
    }

    /**
     * Tableau d'identifiant de notifications.
     *
     * @param string[] $notifications
     */
    public function setNotifications(array $notifications): self
    {
        $this->initialized['notifications'] = true;
        $this->notifications = $notifications;

        return $this;
    }

    /**
     * Information à rajouter sur les notifications.
     */
    public function getInformations(): string
    {
        return $this->informations;
    }

    /**
     * Information à rajouter sur les notifications.
     */
    public function setInformations(string $informations): self
    {
        $this->initialized['informations'] = true;
        $this->informations = $informations;

        return $this;
    }
}
