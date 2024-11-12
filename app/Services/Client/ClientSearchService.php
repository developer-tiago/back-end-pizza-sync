<?php

namespace App\Services\Client;

use App\Models\Client;

class ClientSearchService
{
    public function execute($queryParam)
    {
        $phone = preg_replace('/[^a-zA-Z\d]/', '', $queryParam);

        return Client::where('name', 'like', '%' . $queryParam . '%')
            ->orWhere('email', 'like', '%' . $queryParam . '%')
            ->orWhere('phone', 'like', '%' . $phone . '%')
            ->get();
    }
}
