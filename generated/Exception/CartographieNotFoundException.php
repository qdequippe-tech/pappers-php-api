<?php

namespace Qdequippe\Pappers\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class CartographieNotFoundException extends NotFoundException
{
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(?ResponseInterface $response = null)
    {
        parent::__construct('La cartographie n\'est pas disponible car elle ne contient qu\'un seul noeud ou bien le paramètre `rejeter_premier_degre` a été utilisé.');
        $this->response = $response;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
