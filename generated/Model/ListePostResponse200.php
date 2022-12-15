<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class ListePostResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Le nombre de dirigeants ajoutées à votre liste de surveillance de dirigeants.
     *
     * @var float
     */
    protected $notificationsAjoutees = 0;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Le nombre de dirigeants ajoutées à votre liste de surveillance de dirigeants.
     */
    public function getNotificationsAjoutees(): float
    {
        return $this->notificationsAjoutees;
    }

    /**
     * Le nombre de dirigeants ajoutées à votre liste de surveillance de dirigeants.
     */
    public function setNotificationsAjoutees(float $notificationsAjoutees): self
    {
        $this->initialized['notificationsAjoutees'] = true;
        $this->notificationsAjoutees = $notificationsAjoutees;

        return $this;
    }
}
