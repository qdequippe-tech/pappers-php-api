<?php

namespace Qdequippe\Pappers\Api\Exception;

class RechercheDirigeantsServiceUnavailableException extends ServiceUnavailableException
{
    public function __construct()
    {
        parent::__construct('Service momentanément indisponible.');
    }
}
