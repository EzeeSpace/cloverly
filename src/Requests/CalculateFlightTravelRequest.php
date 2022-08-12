<?php

namespace Cloverly\Cloverly\Requests;

use Cloverly\Cloverly\Connector\CloveryAPIConnector;
use Cloverly\Cloverly\Responses\EstimateResponse;
use Cloverly\Cloverly\Support\ProjectMatch;
use Cloverly\Cloverly\Support\Transaction;
use RuntimeException;
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

    public function __construct(public array $airportCodes, public ?ProjectMatch $projectMatch = null, public ?string $note = "", public array $tags = [], public string $transaction = 'estimates')
    {
    }

    public function defineEndpoint(): string
    {
        return "/$this->transaction/flight";
    }

    protected function castToDto(SaloonResponse $response): Transaction
    {
        return EstimateResponse::fromSaloonResponse($response);
    }

    public function defaultData(): array
    {
        $data = [];

        if (count($this->airportCodes) < 2) {
            throw new RuntimeException('You must provide at least 2 airport codes');
        }

        $data['airports'] = $this->airportCodes;

        if ($this->projectMatch) {
            $data['project_match'] = $this->projectMatch->getData();
        }

        if ($this->note) {
            $data['note'] = $this->note;
        }

        if (count($this->tags) > 0) {
            $data['tags'] = $this->tags;
        }

        return $data;
    }
}
