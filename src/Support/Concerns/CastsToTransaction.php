<?php

namespace Cloverly\Cloverly\Support\Concerns;

use Cloverly\Cloverly\Responses\TransactionResponse;
use Cloverly\Cloverly\Support\Transaction;
use Sammyjo20\Saloon\Http\SaloonResponse;

trait CastsToTransaction
{
    protected function castToDto(SaloonResponse $response): Transaction
    {
        return TransactionResponse::fromSaloonResponse($response);
    }
}
