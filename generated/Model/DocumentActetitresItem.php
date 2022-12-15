<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class DocumentActetitresItem extends \ArrayObject
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
}
