<?php

namespace Cloverly\Cloverly\Support;

class Cost
{
    private float $totalCostInUSDCents;
    private float $transactionCostInUSDCents;
    private float $carbonCostInUSDCents;
    private float $requestedCurrency;
    private float $totalCostInRequestedCurrency;
    private float $transactionCostInRequestedCurrency;
    private float $carbonCostInRequestedCurrency;

    public function __construct(
        $totalCostInUSDCents,
        $transactionCostInUSDCents,
        $carbonCostInUSDCents,
        $requestedCurrency,
        $totalCostInRequestedCurrency,
        $transactionCostInRequestedCurrency,
        $carbonCostInRequestedCurrency
    ) {
        $this->totalCostInUSDCents = $totalCostInUSDCents;
        $this->transactionCostInUSDCents = $transactionCostInUSDCents;
        $this->carbonCostInUSDCents = $carbonCostInUSDCents;
        $this->requestedCurrency = $requestedCurrency;
        $this->totalCostInRequestedCurrency = $totalCostInRequestedCurrency;
        $this->transactionCostInRequestedCurrency = $transactionCostInRequestedCurrency;
        $this->carbonCostInRequestedCurrency = $carbonCostInRequestedCurrency;
    }

    /**
     * @return float
     */
    public function getTotalCostInUSDCents(): float
    {
        return $this->totalCostInUSDCents;
    }

    /**
     * @return float
     */
    public function getTransactionCostInUSDCents(): float
    {
        return $this->transactionCostInUSDCents;
    }

    /**
     * @return float
     */
    public function getCarbonCostInUSDCents(): float
    {
        return $this->carbonCostInUSDCents;
    }

    /**
     * @return float
     */
    public function getRequestedCurrency(): float
    {
        return $this->requestedCurrency;
    }

    /**
     * @return float
     */
    public function getTotalCostInRequestedCurrency(): float
    {
        return $this->totalCostInRequestedCurrency;
    }

    /**
     * @return float
     */
    public function getTransactionCostInRequestedCurrency(): float
    {
        return $this->transactionCostInRequestedCurrency;
    }

    /**
     * @return float
     */
    public function getCarbonCostInRequestedCurrency(): float
    {
        return $this->carbonCostInRequestedCurrency;
    }
}
