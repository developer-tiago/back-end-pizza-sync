<?php

namespace App\Services\Environment;

use App\Models\Environment;

class EnvironmentCreateService
{
    public function execute($request)
    {
        Environment::create([
            'name' => $request['name'],
        ]);

        return ['message' => 'Environment Created Successfully!'];
    }
}
