<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseFicheextraitImmatriculation extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Token.
     *
     * @var string
     */
    protected $token;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Token.
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Token.
     */
    public function setToken(string $token): self
    {
        $this->initialized['token'] = true;
        $this->token = $token;

        return $this;
    }
}
