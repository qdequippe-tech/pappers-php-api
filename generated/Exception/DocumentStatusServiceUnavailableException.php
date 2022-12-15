<?php

namespace Qdequippe\Pappers\Api\Exception;

class DocumentStatusServiceUnavailableException extends ServiceUnavailableException
{
    public function __construct()
    {
        parent::__construct('Service momentanément indisponible.');
    }
}
