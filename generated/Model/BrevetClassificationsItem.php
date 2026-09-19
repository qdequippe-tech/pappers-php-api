<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class BrevetClassificationsItem implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }
    /**
     * Symbole de classification.
     *
     * @var string|null
     */
    protected $symbole;
    /**
     * Libellé en français.
     *
     * @var string|null
     */
    protected $label;

    /**
     * Symbole de classification.
     */
    public function getSymbole(): ?string
    {
        return $this->symbole;
    }

    /**
     * Symbole de classification.
     */
    public function setSymbole(?string $symbole): self
    {
        $this->initialized['symbole'] = true;
        $this->symbole = $symbole;

        return $this;
    }

    /**
     * Libellé en français.
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Libellé en français.
     */
    public function setLabel(?string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['symbole' => ['symbole', 'getSymbole', 'setSymbole'], 'label' => ['label', 'getLabel', 'setLabel']];
    }
}
