<?php

namespace Qdequippe\Pappers\Api\Exception;

class SurveillanceNotificationsDeleteServiceUnavailableException extends ServiceUnavailableException
{
    public function __construct()
    {
        parent::__construct('Service momentanément indisponible.');
    }
}
