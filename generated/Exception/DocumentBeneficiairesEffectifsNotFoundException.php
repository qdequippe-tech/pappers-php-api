<?php

namespace Qdequippe\Pappers\Api\Exception;

class DocumentBeneficiairesEffectifsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Document indisponible.');
    }
}
