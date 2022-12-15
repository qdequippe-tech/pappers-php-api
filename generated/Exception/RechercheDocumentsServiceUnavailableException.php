<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class RechercheDocumentsServiceUnavailableException extends ServiceUnavailableException
{
    public function __construct()
    {
        parent::__construct('Service momentanément indisponible.');
    }
}
