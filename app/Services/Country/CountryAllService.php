<?php

namespace App\Services\Country;

use App\Models\Country;

class CountryAllService
{
    public function execute()
    {
        return Country::all();
    }
}
