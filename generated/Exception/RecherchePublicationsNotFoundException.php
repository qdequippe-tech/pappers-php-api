<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class RecherchePublicationsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Aucune publication ne correspond aux critères indiqués.');
    }
}
