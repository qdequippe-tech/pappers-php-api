<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class DocumentExtraitPappersNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Document indisponible.');
    }
}
