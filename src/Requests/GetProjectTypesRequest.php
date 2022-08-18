<?php

namespace Cloverly\Cloverly\Requests;

use Cloverly\Cloverly\Connector\CloveryAPIConnector;
use Cloverly\Cloverly\Responses\ProjectTypesResponse;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class GetProjectTypesRequest extends SaloonRequest
{
    use HasJsonBody;
    use CastsToDto;

    protected ?string $connector = CloveryAPIConnector::class;
    protected ?string $method = Saloon::GET;

    public function __construct()
    {
    }

    public function defineEndpoint(): string
    {
        return '/project-types';
    }

    protected function castToDto(SaloonResponse $response): array
    {
        return ProjectTypesResponse::fromSaloonResponse($response);
    }
}
