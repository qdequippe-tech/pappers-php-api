<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class DocumentBeneficiairesEffectifsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Vous n\'avez pas les droits pour exécuter cette requête.');
    }
}
