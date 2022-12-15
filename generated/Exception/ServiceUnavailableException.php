<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Exception;

class ServiceUnavailableException extends \RuntimeException implements ServerException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 503);
    }
}
