<?php

namespace App\Services\Client;

use App\Models\Client;

class ClientPaginateService
{
    public function execute()
    {
        return Client::orderBy('name')->paginate(10);
    }
}
