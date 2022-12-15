<?php

namespace Qdequippe\Pappers\Api\Exception;

class ComptesAnnuelsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Comptes annuels indisponibles.');
    }
}
