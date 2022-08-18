<?php

namespace Cloverly\Cloverly\Support;

class Project
{
    public function __construct(
        public string $id,
        public string $name,
        public string $type,
        public string $city,
        public string $state,
        public string $country,
        public ?string $registry_serial_number_range,
        public string $registry_link,
        public string $project_url,
        public string $registry_name = "",
        public array $location = [],
        public int $available_carbon_in_kg = 0,
        public ?float $cost_per_kg_carbon_in_usd_cents = 0,
        public ?float $kwh_of_electricity_per_unit = 0,
        public array $image_list = [],
        public bool $is_featured = false,
        public ?string $short_name = "",
        public string $short_description = "",
        public string $long_description = "",
        public string $registry_project_id = "",
        public ?string $removal_time_period = "",
        public bool $limitations = false,
        public ?string $offset_classification = "",
    ) {
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getRegistrySerialNumberRange(): string
    {
        return $this->registry_serial_number_range;
    }

    /**
     * @return string
     */
    public function getRegistryLink(): string
    {
        return $this->registry_link;
    }

    /**
     * @return string
     */
    public function getProjectUrl(): string
    {
        return $this->project_url;
    }

    /**
     * @return string
     */
    public function getRegistryName(): string
    {
        return $this->registry_name;
    }

    /**
     * @return array
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @return int
     */
    public function getAvailableCarbonInKg(): int
    {
        return $this->available_carbon_in_kg;
    }

    /**
     * @return float|int|null
     */
    public function getCostPerKgCarbonInUsdCents(): float|int|null
    {
        return $this->cost_per_kg_carbon_in_usd_cents;
    }

    /**
     * @return float|int|null
     */
    public function getKwhOfElectricityPerUnit(): float|int|null
    {
        return $this->kwh_of_electricity_per_unit;
    }

    /**
     * @return array
     */
    public function getImageList(): array
    {
        return $this->image_list;
    }

    /**
     * @return bool
     */
    public function isIsFeatured(): bool
    {
        return $this->is_featured;
    }

    /**
     * @return string|null
     */
    public function getShortName(): ?string
    {
        return $this->short_name;
    }

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->short_description;
    }

    /**
     * @return string
     */
    public function getLongDescription(): string
    {
        return $this->long_description;
    }

    /**
     * @return string
     */
    public function getRegistryProjectId(): string
    {
        return $this->registry_project_id;
    }

    /**
     * @return string|null
     */
    public function getRemovalTimePeriod(): ?string
    {
        return $this->removal_time_period;
    }

    /**
     * @return bool
     */
    public function isLimitations(): bool
    {
        return $this->limitations;
    }

    /**
     * @return string|null
     */
    public function getOffsetClassification(): ?string
    {
        return $this->offset_classification;
    }
}
