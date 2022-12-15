<?php

namespace Qdequippe\Pappers\Api\Exception;

class SurveillanceEntrepriseForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Offre dépassée.');
    }
}
