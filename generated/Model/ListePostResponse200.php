<?php

namespace Qdequippe\Pappers\Api\Model;

class ListePostResponse200 extends \ArrayObject
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
     * Le nombre de dirigeants ajoutées à votre liste de surveillance de dirigeants.
     *
     * @var float|null
     */
    protected $notificationsAjoutees = 0;

    /**
     * Le nombre de dirigeants ajoutées à votre liste de surveillance de dirigeants.
     */
    public function getNotificationsAjoutees(): ?float
    {
        return $this->notificationsAjoutees;
    }

    /**
     * Le nombre de dirigeants ajoutées à votre liste de surveillance de dirigeants.
     */
    public function setNotificationsAjoutees(?float $notificationsAjoutees): self
    {
        $this->initialized['notificationsAjoutees'] = true;
        $this->notificationsAjoutees = $notificationsAjoutees;

        return $this;
    }
}
