<?php

namespace App\Services\Environment;

use App\Models\Environment;

class EnvironmentPaginateService
{
    public function execute($accountId)
    {
        return Environment::where('account_id', $accountId)
            ->orderBy('name')
            ->paginate(10);
    }
}
