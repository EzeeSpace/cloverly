<?php

namespace Cloverly\Cloverly;

use Cloverly\Cloverly\Connector\CloveryAPIConnector;
use Cloverly\Cloverly\Requests\CalculateFlightTravelRequest;
use Cloverly\Cloverly\Support\ProjectMatch;

class API
{
    public function __construct(public string $token, public bool $debug = false)
    {
    }

    public function calculateFlightTravel(array $airportCodes, ?ProjectMatch $projectMatch = null, ?string $note = null, array $tags = [])
    {
        $connector = new CloveryAPIConnector();

        $connector->withTokenAuth($this->token);

        $connector->addConfig('debug', $this->debug);

        $request = $connector->request(new CalculateFlightTravelRequest($airportCodes, $projectMatch, $note, $tags));

        return $request->send()->dto();
    }
}
