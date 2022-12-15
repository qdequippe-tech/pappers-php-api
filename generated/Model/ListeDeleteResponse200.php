<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class ListeDeleteResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Le nombre de notifications supprimées de votre liste de surveillance.
     *
     * @var float
     */
    protected $notificationsSupprimees;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

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
