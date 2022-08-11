<?php

namespace Cloverly\Cloverly\Connector;

use Sammyjo20\Saloon\Http\SaloonConnector;

class CloveryAPIConnector extends SaloonConnector
{
    public function defineBaseUrl(): string
    {
        return 'https://api-prod-no-cert.cloverly.com/2021-10';
    }

    public function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
        ];
    }
}
