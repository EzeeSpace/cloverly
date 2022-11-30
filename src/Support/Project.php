<?php

namespace Cloverly\Cloverly\Support;

class Project
{

    private string $id;
    private string $name;
    private string $type;
    private string $city;
    private string $state;
    private string $country;
    private ?string $registry_serial_number_range;
    private string $registry_link;
    private string $project_url;
    private string $registry_name;
    private array $location;
    private int|float|null $available_carbon_in_kg;
    private int|null|float $cost_per_kg_carbon_in_usd_cents;
    private int|null|float $kwh_of_electricity_per_unit;
    private array $image_list;
    private bool $is_featured;
    private ?string $short_name;
    private string $short_description;
    private string $long_description;
    private string $registry_project_id;
    private ?string $removal_time_period;
    private bool $limitations;
    private ?string $offset_classification;
    private ?array $unitedNationsSustainableDevelopmentGoals;

    public function __construct(
        string $id,
        string $name,
        string $type,
        string $city,
        string $state,
        string $country,
        ?string $registry_serial_number_range,
        string $registry_link,
        string $project_url,
        string $registry_name = "",
        array $location = [],
        ?float $available_carbon_in_kg = 0,
        ?float $cost_per_kg_carbon_in_usd_cents = 0,
        ?float $kwh_of_electricity_per_unit = 0,
        array $image_list = [],
        bool $is_featured = false,
        ?string $short_name = "",
        string $short_description = "",
        string $long_description = "",
        string $registry_project_id = "",
        ?string $removal_time_period = "",
        bool $limitations = false,
        ?string $offset_classification = "",
        ?array $unitedNationsSustainableDevelopmentGoals = []
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->registry_serial_number_range = $registry_serial_number_range;
        $this->registry_link = $registry_link;
        $this->project_url = $project_url;
        $this->registry_name = $registry_name;
        $this->location = $location;
        $this->available_carbon_in_kg = $available_carbon_in_kg;
        $this->cost_per_kg_carbon_in_usd_cents = $cost_per_kg_carbon_in_usd_cents;
        $this->kwh_of_electricity_per_unit = $kwh_of_electricity_per_unit;
        $this->image_list = $image_list;
        $this->is_featured = $is_featured;
        $this->short_name = $short_name;
        $this->short_description = $short_description;
        $this->long_description = $long_description;
        $this->registry_project_id = $registry_project_id;
        $this->removal_time_period = $removal_time_period;
        $this->limitations = $limitations;
        $this->offset_classification = $offset_classification;
        $this->unitedNationsSustainableDevelopmentGoals = $unitedNationsSustainableDevelopmentGoals;
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
     * @return ?string
     */
    public function getRegistrySerialNumberRange(): ?string
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
     * @return float|int|null
     */
    public function getAvailableCarbonInKg(): float|int|null
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
    public function isFeatured(): bool
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
    public function hasLimitations(): bool
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

    /**
     * @return array|null
     */
    public function getUnitedNationsSustainableDevelopmentGoals(): ?array
    {
        return $this->unitedNationsSustainableDevelopmentGoals;
    }
}
