<?php

namespace App\Services\Environment;

use App\Models\Environment;

class EnvironmentDeleteService
{
    public function execute($id)
    {
        Environment::find($id)->delete();

        return ['message' => 'Environment deleted successfully!'];
    }
}
