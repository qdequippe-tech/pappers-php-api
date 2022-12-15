<?php

namespace Qdequippe\Pappers\Api\Exception;

class DocumentAvisSituationInseeNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Document indisponible.');
    }
}
