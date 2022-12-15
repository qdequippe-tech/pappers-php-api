<?php

namespace Qdequippe\Pappers\Api\Exception;

class EntrepriseNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Entreprise inexistante.');
    }
}
