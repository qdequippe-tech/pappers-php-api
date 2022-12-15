<?php

declare(strict_types=1);

/*
 * This file is part of QDEQUIPPE's Slack PHP API project.
 * (c) Quentin Dequippe <quentin@dequippe.tech>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Qdequippe\Pappers\Api\Model;

class DocumentComptes extends Document
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     *
     * @var \DateTime
     */
    protected $dateCloture;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     */
    public function getDateCloture(): \DateTime
    {
        return $this->dateCloture;
    }

    /**
     * Date de clôture des comptes, au format AAAA-MM-JJ.
     */
    public function setDateCloture(\DateTime $dateCloture): self
    {
        $this->initialized['dateCloture'] = true;
        $this->dateCloture = $dateCloture;

        return $this;
    }
}
