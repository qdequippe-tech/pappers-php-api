<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class DocumentTelechargementServiceUnavailableException extends ServiceUnavailableException
{
    public function __construct()
    {
        parent::__construct('Service momentanément indisponible.');
    }
}
