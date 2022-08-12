<?php

namespace Cloverly\Cloverly;

use Cloverly\Cloverly\Connector\CloveryAPIConnector;
use Cloverly\Cloverly\Requests\CalculateFlightTravelRequest;
use Cloverly\Cloverly\Support\ProjectMatch;
use GuzzleHttp\Exception\GuzzleException;
use ReflectionException;
use Sammyjo20\Saloon\Exceptions\SaloonException;
use Sammyjo20\Saloon\Exceptions\SaloonRequestException;
use Sammyjo20\Saloon\Http\SaloonResponse;

class API
{
    public function __construct(public string $token, public bool $debug = false)
    {
    }

    /**
     * @throws ReflectionException
     * @throws GuzzleException
     * @throws SaloonRequestException
     * @throws SaloonException
     */
    public function calculateFlightTravel(array $airportCodes, ?ProjectMatch $projectMatch = null, ?string $note = null, array $tags = [])
    {
        $connector = new CloveryAPIConnector();

        $connector->withTokenAuth($this->token);

        $connector->addConfig('debug', $this->debug);

        $request = $connector->request(new CalculateFlightTravelRequest($airportCodes, $projectMatch, $note, $tags));

        return $this->processResponse($request->send());
    }

    /**
     * @throws ReflectionException
     * @throws GuzzleException
     * @throws SaloonRequestException
     * @throws SaloonException
     */
    public function purchaseFlightTravel(array $airportCodes, ?ProjectMatch $projectMatch = null, ?string $note = null, array $tags = [])
    {
        $connector = new CloveryAPIConnector();

        $connector->withTokenAuth($this->token);

        $connector->addConfig('debug', $this->debug);

        $request = $connector->request(new CalculateFlightTravelRequest($airportCodes, $projectMatch, $note, $tags, 'purchases'));

        return $this->processResponse($request->send());
    }

    /**
     * @throws SaloonRequestException
     */
    protected function processResponse(SaloonResponse $response): mixed
    {
        if ($response->successful()) {
            return $response->dto();
        }

        throw $response->toException();
    }
}
