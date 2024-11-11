<?php

namespace App\Services\Environment;

use App\Models\Environment;

class EnvironmentAllService
{
    public function execute()
    {
        return Environment::all();
    }
}
