<?php

namespace Cloverly\Cloverly\Support\Data;

use Illuminate\Support\Arr;

class VehicleType
{
    public function getVehicleType(): array
    {
        return [
            ['code' => 'ACAR', 'title' => 'Any standard vehicle'],
            ['code' => 'ALLB', 'title' => '2-3 door'],
            ['code' => 'ALLC', 'title' => '2 or 4 door'],
            ['code' => 'ALLD', 'title' => '4-5 door'],
            ['code' => 'AELT', 'title' => 'Any Elite'],
            ['code' => 'ACPR', 'title' => 'Coupe/Roadster'],
            ['code' => 'ASPC', 'title' => 'Any specialty vehicle'],
            ['code' => 'ASPX', 'title' => 'Non-standard fleet'],
            ['code' => 'APUP', 'title' => 'Any pickup'],
            ['code' => 'AWGN', 'title' => 'Wagon'],
            ['code' => 'AREC', 'title' => 'Recreational vehicle'],
            ['code' => 'ASUV', 'title' => 'SUV'],
            ['code' => 'AVAN', 'title' => 'Passenger van'],
            ['code' => 'ASIX', 'title' => 'Any 6+ pax van or SUV'],
            ['code' => 'ASEV', 'title' => 'Any 7+ pax van or SUV'],
            ['code' => 'AEIG', 'title' => 'Any 8-pax+ van'],
            ['code' => 'AFWD', 'title' => 'Any 4WD/AWD'],
            ['code' => 'ATRV', 'title' => 'All terrain'],
            ['code' => 'ACGO', 'title' => 'Commercial truck'],
            ['code' => 'ALMO', 'title' => 'Limousine'],
            ['code' => 'ASPT', 'title' => 'Sport'],
            ['code' => 'ACNV', 'title' => 'Convertible'],
            ['code' => 'AOFR', 'title' => 'Special offer car'],
            ['code' => 'AMNO', 'title' => 'Monospace'],
            ['code' => 'AMTO', 'title' => 'Motor home'],
            ['code' => 'AMCY', 'title' => '2-wheel vehicle'],
            ['code' => 'ACRS', 'title' => 'Crossover'],
            ['code' => 'AMAN', 'title' => 'All manual transmission vehicles'],
            ['code' => 'AUTO', 'title' => 'All automatic transmission vehicles'],
            ['code' => 'AGAS', 'title' => 'All gosline powered vehicles'],
            ['code' => 'APET', 'title' => 'All petrol-powered vehicles'],
            ['code' => 'ADSL', 'title' => 'All diesel-powered vehicles'],
            ['code' => 'AGRN', 'title' => 'Any green vehicle (hybrid, electric, LPG, hydrogen, multi-fuel)'],
            ['code' => 'AHYB', 'title' => 'All hybrid vehicles'],
            ['code' => 'AELC', 'title' => 'All electric-powered vehicles'],
            ['code' => 'AHYD', 'title' => 'All hydrogen-powered vehicles'],
            ['code' => 'AMFP', 'title' => 'All multi-fuel powered vehicles'],
            ['code' => 'ACPG', 'title' => 'All LPG/compressed gas-powered vehicles'],
            ['code' => 'AETH', 'title' => 'All ethanol-powered vehicles'],
        ];
    }

    public static function isValidVehicleType(string $vehicleType): bool
    {
        $vehicleTypes = (new static())->getVehicleType();

        return ! (Arr::first($vehicleTypes, fn ($value, $key) => $value['code'] === $vehicleType) === null);
    }
}
