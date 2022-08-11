<?php

namespace Cloverly\Cloverly\Requests;

use Cloverly\Cloverly\Connector\CloveryAPIConnector;
use Cloverly\Cloverly\Responses\EstimateResponse;
use Cloverly\Cloverly\Support\Estimate;
use Cloverly\Cloverly\Support\ProjectMatch;
use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class CalculateFlightTravelRequest extends SaloonRequest
{
    use HasJsonBody;
    use CastsToDto;

    protected ?string $connector = CloveryAPIConnector::class;

    protected ?string $method = 'POST';

    public function __construct(public array $airportCodes, public ?ProjectMatch $projectMatch, public ?string $note = "", public array $tags = [])
    {
    }

    public function defineEndpoint(): string
    {
        return '/estimates/flight';
    }

    protected function castToDto(SaloonResponse $response): Estimate
    {
        return EstimateResponse::fromSaloonResponse($response);
    }
}
