<?php

namespace Qdequippe\Pappers\Api\Exception;

class RechercheUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Clé API incorrecte.');
    }
}
