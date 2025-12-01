<?php

namespace Qdequippe\Pappers\Api\Model;

class EntrepriseCitee extends \ArrayObject
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
     * SIREN de l'entreprise liée.
     *
     * @var string|null
     */
    protected $siren;
    /**
     * Nom de l'entreprise liée.
     *
     * @var string|null
     */
    protected $nomEntreprise;
    /**
     * Type de relation avec l'entreprise (Actionnariat, Banque, Notaire, Formaliste, etc.). La liste des relations possibles n'est pas fixe et peut évoluer à tout moment sans changement de version API.
     *
     * @var string|null
     */
    protected $typeRelation;
    /**
     * Mentions des entreprises (initiale ou liée) dans les documents.
     *
     * @var list<EntrepriseCiteeMentionsItem>|null
     */
    protected $mentions;
    /**
     * Liste des personnes/entités associées à l'entreprise.
     *
     * @var list<EntrepriseCiteePersonnesItem>|null
     */
    protected $personnes;

    /**
     * SIREN de l'entreprise liée.
     */
    public function getSiren(): ?string
    {
        return $this->siren;
    }

    /**
     * SIREN de l'entreprise liée.
     */
    public function setSiren(?string $siren): self
    {
        $this->initialized['siren'] = true;
        $this->siren = $siren;

        return $this;
    }

    /**
     * Nom de l'entreprise liée.
     */
    public function getNomEntreprise(): ?string
    {
        return $this->nomEntreprise;
    }

    /**
     * Nom de l'entreprise liée.
     */
    public function setNomEntreprise(?string $nomEntreprise): self
    {
        $this->initialized['nomEntreprise'] = true;
        $this->nomEntreprise = $nomEntreprise;

        return $this;
    }

    /**
     * Type de relation avec l'entreprise (Actionnariat, Banque, Notaire, Formaliste, etc.). La liste des relations possibles n'est pas fixe et peut évoluer à tout moment sans changement de version API.
     */
    public function getTypeRelation(): ?string
    {
        return $this->typeRelation;
    }

    /**
     * Type de relation avec l'entreprise (Actionnariat, Banque, Notaire, Formaliste, etc.). La liste des relations possibles n'est pas fixe et peut évoluer à tout moment sans changement de version API.
     */
    public function setTypeRelation(?string $typeRelation): self
    {
        $this->initialized['typeRelation'] = true;
        $this->typeRelation = $typeRelation;

        return $this;
    }

    /**
     * Mentions des entreprises (initiale ou liée) dans les documents.
     *
     * @return list<EntrepriseCiteeMentionsItem>|null
     */
    public function getMentions(): ?array
    {
        return $this->mentions;
    }

    /**
     * Mentions des entreprises (initiale ou liée) dans les documents.
     *
     * @param list<EntrepriseCiteeMentionsItem>|null $mentions
     */
    public function setMentions(?array $mentions): self
    {
        $this->initialized['mentions'] = true;
        $this->mentions = $mentions;

        return $this;
    }

    /**
     * Liste des personnes/entités associées à l'entreprise.
     *
     * @return list<EntrepriseCiteePersonnesItem>|null
     */
    public function getPersonnes(): ?array
    {
        return $this->personnes;
    }

    /**
     * Liste des personnes/entités associées à l'entreprise.
     *
     * @param list<EntrepriseCiteePersonnesItem>|null $personnes
     */
    public function setPersonnes(?array $personnes): self
    {
        $this->initialized['personnes'] = true;
        $this->personnes = $personnes;

        return $this;
    }
}
