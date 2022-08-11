<?php

namespace Cloverly\Cloverly\Support;

class ProjectMatch
{
    public const COST_LOWEST = 'lowest';
    public const COST_HIGHEST = 'highest';

    public function __construct(public ?string $project_id = "", public ?string $type = "", public ?string $location = "", public ?string $cost = "")
    {
    }
}
