<?php

namespace Qdequippe\Pappers\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class DocumentScoringNonFinancierServiceUnavailableException extends ServiceUnavailableException
{
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(?ResponseInterface $response = null)
    {
        parent::__construct('Service momentanément indisponible.');
        $this->response = $response;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
