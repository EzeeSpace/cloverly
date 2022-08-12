<?php

namespace Cloverly\Cloverly\Support;

class ProjectMatch
{
    public const COST_LOWEST = 'lowest';
    public const COST_HIGHEST = 'highest';

    public function __construct(public ?string $project_id = "", public ?string $type = "", public ?string $location = "", public ?string $cost = "")
    {
    }

    public function getData()
    {
        $data = [];

        if (! blank($this->project_id)) {
            $data['project_id'] = $this->project_id;
        }

        if (! blank($this->type)) {
            $data['type'] = $this->type;
        }

        if (! blank($this->location)) {
            $data['location'] = $this->location;
        }

        if (! blank($this->cost)) {
            $data['cost'] = $this->cost;
        }

        return $data;
    }
}
