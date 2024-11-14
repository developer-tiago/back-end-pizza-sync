<?php

namespace App\Services\Client;

use App\Models\Client;

class ClientDeleteService
{
    public function execute($id)
    {
        Client::find($id)->delete();

        return ['message' => 'Client deleted successfully!'];
    }
}
