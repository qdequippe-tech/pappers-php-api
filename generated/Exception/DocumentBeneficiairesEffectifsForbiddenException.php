<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Exception;

class DocumentBeneficiairesEffectifsForbiddenException extends ForbiddenException
{
    public function __construct()
    {
        parent::__construct('Vous n\'avez pas les droits pour exécuter cette requête.');
    }
}
