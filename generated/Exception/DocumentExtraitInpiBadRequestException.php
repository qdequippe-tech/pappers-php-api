<?php

namespace Qdequippe\Pappers\Api\Exception;

class DocumentExtraitInpiBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Paramètres de la requête incorrects.');
    }
}
