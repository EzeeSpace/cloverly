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
        public string $registry_serial_number_range,
        public string $registry_link,
        public string $project_url,
        public string $registry_name = "",
        public array $location = [],
        public int $available_carbon_in_kg = 0,
        public ?float $cost_per_kg_carbon_in_usd_cents = 0,
        public ?float $kwh_of_electricity_per_unit = 0,
        public array $image_list = [],
        public bool $is_featured = false,
        public string $short_name = "",
        public string $short_description = "",
        public string $long_description = "",
        public string $registry_project_id = "",
        public string $removal_time_period = "",
        public bool $limitations = false,
        public string $offset_classification = "",
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
}
