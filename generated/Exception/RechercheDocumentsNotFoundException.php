<?php

namespace Qdequippe\Pappers\Api\Exception;

class RechercheDocumentsNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Aucun document ne correspond aux critères indiqués.');
    }
}
