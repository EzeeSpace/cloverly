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
        public string $project_url
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
