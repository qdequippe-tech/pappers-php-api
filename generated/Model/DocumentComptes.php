<?php

declare(strict_types=1);

namespace Qdequippe\Pappers\Api\Model;

class DocumentComptes extends Document
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     *
     * @var \DateTime|null
     */
    protected $dateCloture;

    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     */
    public function getDateCloture(): ?\DateTime
    {
        return $this->dateCloture;
    }

    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     */
    public function setDateCloture(?\DateTime $dateCloture): self
    {
        $this->initialized['dateCloture'] = true;
        $this->dateCloture = $dateCloture;

        return $this;
    }
}
