<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class SurveillanceDirigeantNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Liste non trouvée.');
    }
}
