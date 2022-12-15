<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class DocumentExtraitPappersBadRequestException extends BadRequestException
{
    public function __construct()
    {
        parent::__construct('Paramètres de la requête incorrects.');
    }
}
