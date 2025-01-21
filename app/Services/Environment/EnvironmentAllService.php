<?php

namespace App\Services\Environment;

use App\Models\Environment;

class EnvironmentAllService
{
    public function execute($accountId)
    {
        return Environment::where('account_id', $accountId)->get();
    }
}
