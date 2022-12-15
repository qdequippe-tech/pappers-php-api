<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFichedepotsActesItemActesItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Type de l'acte.
     *
     * @var string
     */
    protected $type;
    /**
     * Décision de l'acte.
     *
     * @var string
     */
    protected $decision;
    /**
     * Date de l'acte, au format AAAA-MM-JJ.
     *
     * @var \DateTime
     */
    protected $dateActe;
    /**
     * Date formatée de l'acte, au format JJ/MM/AAAA.
     *
     * @var string
     */
    protected $dateActeFormate;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Type de l'acte.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type de l'acte.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Décision de l'acte.
     */
    public function getDecision(): string
    {
        return $this->decision;
    }

    /**
     * Décision de l'acte.
     */
    public function setDecision(string $decision): self
    {
        $this->initialized['decision'] = true;
        $this->decision = $decision;

        return $this;
    }

    /**
     * Date de l'acte, au format AAAA-MM-JJ.
     */
    public function getDateActe(): \DateTime
    {
        return $this->dateActe;
    }

    /**
     * Date de l'acte, au format AAAA-MM-JJ.
     */
    public function setDateActe(\DateTime $dateActe): self
    {
        $this->initialized['dateActe'] = true;
        $this->dateActe = $dateActe;

        return $this;
    }

    /**
     * Date formatée de l'acte, au format JJ/MM/AAAA.
     */
    public function getDateActeFormate(): string
    {
        return $this->dateActeFormate;
    }

    /**
     * Date formatée de l'acte, au format JJ/MM/AAAA.
     */
    public function setDateActeFormate(string $dateActeFormate): self
    {
        $this->initialized['dateActeFormate'] = true;
        $this->dateActeFormate = $dateActeFormate;

        return $this;
    }
}
