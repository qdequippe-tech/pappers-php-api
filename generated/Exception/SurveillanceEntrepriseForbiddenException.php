<?php

namespace Qdequippe\Pappers\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class SurveillanceEntrepriseForbiddenException extends ForbiddenException
{
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(?ResponseInterface $response = null)
    {
        parent::__construct('Offre dépassée.');
        $this->response = $response;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
