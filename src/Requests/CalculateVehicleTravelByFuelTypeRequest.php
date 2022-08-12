<?php

namespace Cloverly\Cloverly\Requests;

use Cloverly\Cloverly\Connector\CloveryAPIConnector;
use Cloverly\Cloverly\Responses\TransactionResponse;
use Cloverly\Cloverly\Support\Concerns\CastsToTransaction;
use Cloverly\Cloverly\Support\ProjectMatch;
use Cloverly\Cloverly\Support\Transaction;
use http\Exception\RuntimeException;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class CalculateVehicleTravelByFuelTypeRequest extends SaloonRequest
{
    use HasJsonBody;
    use CastsToDto;
    use CastsToTransaction;

    protected ?string $connector = CloveryAPIConnector::class;

    protected ?string $method = Saloon::POST;

    public function __construct(
        public int $distanceValue,
        public string $distanceUnit,
        public int $fuelEfficiencyValue,
        public string $fuelEfficiencyUnits,
        public string $fuelType,
        public ?ProjectMatch $projectMatch = null,
        public ?string $note = "",
        public array $tags = [],
        public string $transaction = 'estimates'
    ) {
    }

    public function defineEndpoint(): string
    {
        return '/estimates/vehicle';
    }

    public function defaultData(): array
    {
        $data = [];

        if (empty($this->distanceValue) || empty($this->distanceUnit)) {
            throw new RuntimeException('You must provide a valid value for distance value and unit');
        }

        if (in_array($this->distanceUnit, ['km', 'miles']) === false) {
            throw new RuntimeException('You must provide a valid value for distance unit: km or miles');
        }

        $data['distance'] = [
            'value' => $this->distanceValue,
            'units' => $this->distanceUnit,
        ];

        if (empty($this->fuelEfficiencyValue) || empty($this->fuelEfficiencyUnits) || empty($this->fuelType)) {
            throw new RuntimeException('You must provide a valid value for fuel efficiency value and unit');
        }

        if (in_array($this->fuelEfficiencyUnits, ['km/l', 'mpg', '1/100km']) === false) {
            throw new RuntimeException('You must provide a valid value for fuel efficiency units: km/l, mpg, 1/100km');
        }

        if (in_array($this->fuelType, ['diesel', 'gasoline']) === false) {
            throw new RuntimeException('You must provide a valid value for fuel type: diesel or gasoline');
        }

        $data['fuel_efficiency'] = [
            'value' => $this->fuelEfficiencyValue,
            'units' => $this->fuelEfficiencyUnits,
            'fuel_type' => $this->fuelType,
        ];

        if ($this->projectMatch) {
            $data['project_match'] = $this->projectMatch->getData();
        }

        if (! blank($this->note)) {
            $data['note'] = $this->note;
        }

        if (count($this->tags) > 0) {
            $data['tags'] = $this->tags;
        }

        return $data;
    }
}
