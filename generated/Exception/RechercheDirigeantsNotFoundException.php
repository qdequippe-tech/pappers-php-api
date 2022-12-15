<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class RechercheDirigeantsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Aucun dirigeant ne correspond aux critères indiqués.');
    }
}
