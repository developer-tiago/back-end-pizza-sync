<?php

namespace App\Services\Client;

use App\Models\Client;

class ClientCreateService
{
    public function execute($request)
    {
        Client::create([
            'name'          => $request['name'],
            'country_id'    => $request['country_id'],
            'email'         => $request['email'],
            'phone_prefix'  => $request['phone_prefix'],
            'phone'         => $request['phone'],
            'street'        => $request['street'],
            'number'        => $request['number'],
            'neighborhood'  => $request['neighborhood'],
            'city'          => $request['city'],
            'complement'    => $request['complement']
        ]);

        return ['message' => 'Client Created Successfully!'];
    }
}
