<?php

namespace Qdequippe\Pappers\Api\Exception;

class DocumentStatusBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Paramètres de la requête incorrects.');
    }
}
