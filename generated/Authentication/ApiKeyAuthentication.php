<?php

namespace Qdequippe\Pappers\Api\Authentication;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;

class ApiKeyAuthentication implements AuthenticationPlugin
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }

    public function authentication(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('api-key', $this->{'apiKey'});
    }

    public function getScope(): string
    {
        return 'apiKey';
    }
}
