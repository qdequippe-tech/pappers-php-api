<?php

namespace Qdequippe\Pappers\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class DocumentStatusNotFoundException extends NotFoundException
{
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(?ResponseInterface $response = null)
    {
        parent::__construct('Document indisponible.');
        $this->response = $response;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
