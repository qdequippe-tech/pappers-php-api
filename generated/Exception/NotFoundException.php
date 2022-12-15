<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class NotFoundException extends \RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 404);
    }
}
