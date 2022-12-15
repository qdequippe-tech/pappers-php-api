<?php

namespace Qdequippe\Pappers\Api\Exception;

class DocumentExtraitInpiNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Document indisponible.');
    }
}
