<?php

namespace Qdequippe\Pappers\Api\Exception;

class RechercheBeneficiairesNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Aucun bénéficiaire effectif ne correspond aux critères indiqués.');
    }
}
