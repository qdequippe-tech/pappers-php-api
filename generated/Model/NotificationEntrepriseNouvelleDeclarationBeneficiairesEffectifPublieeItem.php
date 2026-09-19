<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class NotificationEntrepriseNouvelleDeclarationBeneficiairesEffectifPublieeItem implements AdditionalPropertiesInterface
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
     * Acte publié.
     *
     * @var string|null
     */
    protected $acte;
    /**
     * Date de publication de l'acte au format AAAA-MM-JJ.
     *
     * @var string|null
     */
    protected $date;

    /**
     * Acte publié.
     */
    public function getActe(): ?string
    {
        return $this->acte;
    }

    /**
     * Acte publié.
     */
    public function setActe(?string $acte): self
    {
        $this->initialized['acte'] = true;
        $this->acte = $acte;

        return $this;
    }

    /**
     * Date de publication de l'acte au format AAAA-MM-JJ.
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Date de publication de l'acte au format AAAA-MM-JJ.
     */
    public function setDate(?string $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['acte' => ['acte', 'getActe', 'setActe'], 'date' => ['date', 'getDate', 'setDate']];
    }
}
