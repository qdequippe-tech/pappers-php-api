<?php

namespace Qdequippe\Pappers\Api\Exception;

class DocumentTelechargementNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Document indisponible.');
    }
}
