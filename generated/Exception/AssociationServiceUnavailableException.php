<?php

namespace Qdequippe\Pappers\Api\Exception;

class AssociationServiceUnavailableException extends ServiceUnavailableException
{
    public function __construct()
    {
        parent::__construct('Service momentanément indisponible.');
    }
}
