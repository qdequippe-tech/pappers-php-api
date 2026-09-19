<?php

namespace Qdequippe\Pappers\Api\Model;

use Qdequippe\Pappers\Api\Runtime\AdditionalAndPatternProperties;
use Qdequippe\Pappers\Api\Runtime\AdditionalPropertiesInterface;

class ScoringFinancierDetailsScore implements AdditionalPropertiesInterface
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
     * @var float|null
     */
    protected $scoreEbitCa;
    /**
     * @var float|null
     */
    protected $scoreFondsDeRoulement;
    /**
     * @var float|null
     */
    protected $scoreTresorerieNette;
    /**
     * @var float|null
     */
    protected $scoreDettesFiscalesVa;
    /**
     * @var float|null
     */
    protected $scoreCashFlow;
    /**
     * @var float|null
     */
    protected $scoreDettesFiscalesCa;
    /**
     * @var float|null
     */
    protected $scoreChargesFinancieresNettes;

    public function getScoreEbitCa(): ?float
    {
        return $this->scoreEbitCa;
    }

    public function setScoreEbitCa(?float $scoreEbitCa): self
    {
        $this->initialized['scoreEbitCa'] = true;
        $this->scoreEbitCa = $scoreEbitCa;

        return $this;
    }

    public function getScoreFondsDeRoulement(): ?float
    {
        return $this->scoreFondsDeRoulement;
    }

    public function setScoreFondsDeRoulement(?float $scoreFondsDeRoulement): self
    {
        $this->initialized['scoreFondsDeRoulement'] = true;
        $this->scoreFondsDeRoulement = $scoreFondsDeRoulement;

        return $this;
    }

    public function getScoreTresorerieNette(): ?float
    {
        return $this->scoreTresorerieNette;
    }

    public function setScoreTresorerieNette(?float $scoreTresorerieNette): self
    {
        $this->initialized['scoreTresorerieNette'] = true;
        $this->scoreTresorerieNette = $scoreTresorerieNette;

        return $this;
    }

    public function getScoreDettesFiscalesVa(): ?float
    {
        return $this->scoreDettesFiscalesVa;
    }

    public function setScoreDettesFiscalesVa(?float $scoreDettesFiscalesVa): self
    {
        $this->initialized['scoreDettesFiscalesVa'] = true;
        $this->scoreDettesFiscalesVa = $scoreDettesFiscalesVa;

        return $this;
    }

    public function getScoreCashFlow(): ?float
    {
        return $this->scoreCashFlow;
    }

    public function setScoreCashFlow(?float $scoreCashFlow): self
    {
        $this->initialized['scoreCashFlow'] = true;
        $this->scoreCashFlow = $scoreCashFlow;

        return $this;
    }

    public function getScoreDettesFiscalesCa(): ?float
    {
        return $this->scoreDettesFiscalesCa;
    }

    public function setScoreDettesFiscalesCa(?float $scoreDettesFiscalesCa): self
    {
        $this->initialized['scoreDettesFiscalesCa'] = true;
        $this->scoreDettesFiscalesCa = $scoreDettesFiscalesCa;

        return $this;
    }

    public function getScoreChargesFinancieresNettes(): ?float
    {
        return $this->scoreChargesFinancieresNettes;
    }

    public function setScoreChargesFinancieresNettes(?float $scoreChargesFinancieresNettes): self
    {
        $this->initialized['scoreChargesFinancieresNettes'] = true;
        $this->scoreChargesFinancieresNettes = $scoreChargesFinancieresNettes;

        return $this;
    }

    public function definedProperties(): array
    {
        return ['scoreEbitCa' => ['score_ebit_ca', 'getScoreEbitCa', 'setScoreEbitCa'], 'scoreFondsDeRoulement' => ['score_fonds_de_roulement', 'getScoreFondsDeRoulement', 'setScoreFondsDeRoulement'], 'scoreTresorerieNette' => ['score_tresorerie_nette', 'getScoreTresorerieNette', 'setScoreTresorerieNette'], 'scoreDettesFiscalesVa' => ['score_dettes_fiscales_va', 'getScoreDettesFiscalesVa', 'setScoreDettesFiscalesVa'], 'scoreCashFlow' => ['score_cash_flow', 'getScoreCashFlow', 'setScoreCashFlow'], 'scoreDettesFiscalesCa' => ['score_dettes_fiscales_ca', 'getScoreDettesFiscalesCa', 'setScoreDettesFiscalesCa'], 'scoreChargesFinancieresNettes' => ['score_charges_financieres_nettes', 'getScoreChargesFinancieresNettes', 'setScoreChargesFinancieresNettes']];
    }
}
