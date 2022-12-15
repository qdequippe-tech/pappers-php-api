<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class SurveillanceEntrepriseForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Offre dépassée.');
    }
}
