<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Services\Country\CountryAllService;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return response()->json((new CountryAllService())->execute());
    }
}
