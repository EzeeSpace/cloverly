<?php

namespace Cloverly\Cloverly;

use Cloverly\Cloverly\Connector\CloveryAPIConnector;
use Cloverly\Cloverly\Requests\CalculateFlightTravelRequest;
use Cloverly\Cloverly\Support\ProjectMatch;

class API
{
    public function __construct(public string $token)
    {
    }

    public function calculateFlightTravel(array $airportCodes, ?ProjectMatch $projectMatch = null, ?string $note = null, array $tags = [])
    {
        $connector = new CloveryAPIConnector();

        $connector->withTokenAuth($this->token);

        $request = $connector->request(new CalculateFlightTravelRequest($airportCodes, $projectMatch, $note, $tags));

        return $request->send()->dto();
    }
}
