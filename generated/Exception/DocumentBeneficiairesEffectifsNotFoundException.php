<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class DocumentBeneficiairesEffectifsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Document indisponible.');
    }
}
