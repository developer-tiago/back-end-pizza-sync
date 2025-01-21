<?php

namespace App\Services\Client;

use App\Models\Client;

class ClientPaginateService
{
    public function execute($accountId)
    {
        return Client::where('account_id', $accountId)
            ->orderBy('name')
            ->paginate(10);
    }
}
