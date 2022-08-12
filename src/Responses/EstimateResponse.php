<?php

namespace Cloverly\Cloverly\Responses;

use Cloverly\Cloverly\Support\Transaction;
use Illuminate\Support\Arr;
use Sammyjo20\Saloon\Http\SaloonResponse;

class EstimateResponse
{
    public function __construct()
    {
    }

    public static function fromSaloonResponse(SaloonResponse $response): Transaction
    {
        $data = $response->json();

        return new Transaction(
            Arr::get($data, 'transaction_id'),
            Arr::get($data, 'transaction_state'),
            Arr::get($data, 'environment'),
            Arr::get($data, 'total_co2e_in_kg'),
            Arr::get($data, 'total_micro_units'),
            Arr::get($data, 'cost'),
            Arr::get($data, 'project'),
            Arr::get($data, 'receipt_url')
        );
    }
}
