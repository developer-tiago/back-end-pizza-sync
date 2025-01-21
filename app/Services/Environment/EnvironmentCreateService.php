<?php

namespace App\Services\Environment;

use App\Models\Environment;

class EnvironmentCreateService
{
    public function execute($request, $accountId)
    {
        Environment::create([
            'account_id' => $accountId,
            'name' => $request['name'],
        ]);

        return ['message' => 'Environment Created Successfully!'];
    }
}
