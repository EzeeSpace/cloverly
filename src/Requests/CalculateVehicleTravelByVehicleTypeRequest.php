<?php

namespace Cloverly\Cloverly\Requests;

use Cloverly\Cloverly\Connector\CloveryAPIConnector;
use Cloverly\Cloverly\Support\Concerns\CastsToTransaction;
use Cloverly\Cloverly\Support\Data\VehicleType;
use Cloverly\Cloverly\Support\ProjectMatch;
use RuntimeException;
use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class CalculateVehicleTravelByVehicleTypeRequest extends SaloonRequest
{
    use HasJsonBody;
    use CastsToDto;
    use CastsToTransaction;

    protected ?string $connector = CloveryAPIConnector::class;

    protected ?string $method = Saloon::POST;

    public function __construct(
        public int $distanceValue,
        public string $distanceUnit,
        public int $fuelEfficiencyCarType,
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

        if (VehicleType::isValidVehicleType($this->fuelEfficiencyCarType) === false) {
            throw new RuntimeException('You must provide a valid value for fuel efficiency car type');
        }

        $data['fuel_efficiency'] = [
            'vehicle_type' => $this->fuelEfficiencyCarType,
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
