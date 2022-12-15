<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class RechercheNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Aucune entreprise ne correspond aux critères indiqués.');
    }
}
