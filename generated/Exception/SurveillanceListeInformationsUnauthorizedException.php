<?php

namespace Qdequippe\Pappers\Api\Exception;

class SurveillanceListeInformationsUnauthorizedException extends UnauthorizedException
{
    public function __construct()
    {
        parent::__construct('Clé API incorrecte.');
    }
}
