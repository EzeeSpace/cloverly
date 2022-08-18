<?php

namespace Cloverly\Cloverly\Support;

class ProjectType
{
    private ?string $type_id;
    private ?string $name;
    private ?string $description;

    public function __construct(?string $type_id, ?string $name, ?string $description)
    {
        $this->type_id = $type_id;
        $this->name = $name;
        $this->description = $description;
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
