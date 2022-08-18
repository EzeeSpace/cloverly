<?php

namespace Cloverly\Cloverly\Responses;

use Cloverly\Cloverly\Support\Project;
use Illuminate\Support\Arr;
use Sammyjo20\Saloon\Http\SaloonResponse;

class ProjectsResponse
{
    public function __construct(public $project)
    {
    }

    public static function fromSaloonResponse(SaloonResponse $response): array
    {
        $projects = [];

        foreach ($response->json() as $project) {
            $projects[] = new Project(
                Arr::get($project, 'id'),
                Arr::get($project, 'name'),
                Arr::get($project, 'type'),
                Arr::get($project, 'city'),
                Arr::get($project, 'state'),
                Arr::get($project, 'country'),
                Arr::get($project, 'registry_serial_number_range'),
                Arr::get($project, 'registry_link'),
                Arr::get($project, 'project_url'),
                Arr::get($project, 'registry_name'),
                Arr::get($project, 'location'),
                Arr::get($project, 'available_carbon_in_kg'),
                Arr::get($project, 'cost_per_kg_carbon_in_usd_cents'),
                Arr::get($project, 'kwh_of_electricity_per_unit'),
                Arr::get($project, 'image_list'),
                Arr::get($project, 'is_featured'),
                Arr::get($project, 'short_name'),
                Arr::get($project, 'short_description'),
                Arr::get($project, 'long_description'),
                Arr::get($project, 'registry_project_id'),
                Arr::get($project, 'removal_time_period'),
                Arr::get($project, 'limitations'),
                Arr::get($project, 'offset_classification'),
            );
        }

        return $projects;
    }
}
