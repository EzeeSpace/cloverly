<?php

namespace Cloverly\Cloverly\Support;

class ProjectType
{
    public function __construct(public ?string $type_id, public ?string $name, public ?string $description)
    {
    }

    /**
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->type_id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
}
