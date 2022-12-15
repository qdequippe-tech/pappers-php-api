<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class SuiviJetonsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Clé API incorrecte.');
    }
}
