<?php

namespace Cloverly\Cloverly\Support;

use Illuminate\Support\Arr;

class Transaction
{
    private string $transactionId;
    private string $transactionState;
    private string $environment;
    private float $totalCO2eInKg;
    private int $totalMicroUnits;
    private array $cost;
    private array $project;
    private string $receiptUrl;

    public function __construct(
        string $transactionId,
        string $transactionState,
        string $environment,
        $totalCO2eInKg,
        $totalMicroUnits,
        array $cost,
        array $project,
        string $receiptUrl
    ) {
        $this->transactionId = $transactionId;
        $this->transactionState = $transactionState;
        $this->environment = $environment;
        $this->totalCO2eInKg = $totalCO2eInKg;
        $this->totalMicroUnits = $totalMicroUnits;
        $this->cost = $cost;
        $this->project = $project;
        $this->receiptUrl = $receiptUrl;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @return string
     */
    public function getTransactionState(): string
    {
        return $this->transactionState;
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @return float
     */
    public function getTotalCO2eInKg(): float
    {
        return $this->totalCO2eInKg;
    }

    /**
     * @return int
     */
    public function getTotalMicroUnits(): int
    {
        return $this->totalMicroUnits;
    }

    /**
     * @return Cost
     */
    public function getCost(): Cost
    {
        return new Cost(
            Arr::get($this->cost, 'in_usd_cents.total_cost'),
            Arr::get($this->cost, 'in_usd_cents.transaction_cost'),
            Arr::get($this->cost, 'in_usd_cents.carbon_cost'),
            Arr::get($this->cost, 'in_usd_cents.requested_currency'),
            Arr::get($this->cost, 'in_requested_currency.total_cost'),
            Arr::get($this->cost, 'in_requested_currency.transaction_cost'),
            Arr::get($this->cost, 'in_requested_currency.carbon_cost')
        );
    }

    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return new Project(
            Arr::get($this->project, 'id'),
            Arr::get($this->project, 'name'),
            Arr::get($this->project, 'type'),
            Arr::get($this->project, 'city'),
            Arr::get($this->project, 'state'),
            Arr::get($this->project, 'country'),
            Arr::get($this->project, 'registry_serial_number_range'),
            Arr::get($this->project, 'registry_link'),
            Arr::get($this->project, 'project_url')
        );
    }

    /**
     * @return string
     */
    public function getReceiptUrl(): string
    {
        return $this->receiptUrl;
    }
}
