<?php

namespace Qdequippe\Pappers\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class SurveillanceNotificationsDeleteNotFoundException extends NotFoundException
{
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(?ResponseInterface $response = null)
    {
        parent::__construct('Liste non trouvée.');
        $this->response = $response;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
