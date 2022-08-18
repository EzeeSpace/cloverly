<?php

namespace Cloverly\Cloverly\Responses;

use Cloverly\Cloverly\Support\ProjectType;
use Illuminate\Support\Arr;
use Sammyjo20\Saloon\Http\SaloonResponse;

class ProjectTypesResponse
{
    public function __construct()
    {
    }

    public static function fromSaloonResponse(SaloonResponse $response): array
    {
        $projectTypes = [];

        foreach ($response->json() as $projectType) {
            $projectTypes[] = new ProjectType(
                type_id: Arr::get($projectType, 'type_id'),
                name: Arr::get($projectType, 'name'),
                description: Arr::get($projectType, 'description'),
            );
        }

        return $projectTypes;
    }
}
