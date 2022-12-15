<?php

namespace Qdequippe\Pappers\Api\Exception;

class DocumentExtraitPappersNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Document indisponible.');
    }
}
