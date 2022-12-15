<?php

namespace Qdequippe\Pappers\Api\Exception;

class SurveillanceEntrepriseNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Liste non trouvée.');
    }
}
