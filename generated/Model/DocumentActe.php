<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class DocumentActe extends Document
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Titres des actes associés au document.
     *
     * @var DocumentActetitresItem[]
     */
    protected $titres;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Titres des actes associés au document.
     *
     * @return DocumentActetitresItem[]
     */
    public function getTitres(): array
    {
        return $this->titres;
    }

    /**
     * Titres des actes associés au document.
     *
     * @param DocumentActetitresItem[] $titres
     */
    public function setTitres(array $titres): self
    {
        $this->initialized['titres'] = true;
        $this->titres = $titres;

        return $this;
    }
}
