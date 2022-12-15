<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class BodaccRadiation extends Bodacc
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
}
