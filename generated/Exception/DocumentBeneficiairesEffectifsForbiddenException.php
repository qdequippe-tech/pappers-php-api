<?php

namespace Qdequippe\Pappers\Api\Exception;

use Psr\Http\Message\ResponseInterface;

class DocumentBeneficiairesEffectifsForbiddenException extends ForbiddenException
{
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(?ResponseInterface $response = null)
    {
        parent::__construct('Vous n\'avez pas les droits pour exécuter cette requête.');
        $this->response = $response;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
