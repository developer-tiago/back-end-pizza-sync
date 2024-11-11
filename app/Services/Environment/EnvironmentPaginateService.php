<?php

namespace App\Services\Environment;

use App\Models\Environment;

class EnvironmentPaginateService
{
    public function execute()
    {
        return Environment::paginate(10);
    }
}
