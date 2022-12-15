<?php

namespace Qdequippe\Pappers\Api\Exception;

class AssociationNotFoundException extends NotFoundException
{
    public function __construct()
    {
        parent::__construct('Association inexistante.');
    }
}
