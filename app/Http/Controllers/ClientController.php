<?php

namespace App\Http\Controllers;

use App\Services\Client\ClientPaginateService;
use App\Services\Client\ClientSearchService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function paginate()
    {
        return response()->json((new ClientPaginateService())->execute());
    }

    public function search(Request $request): JsonResponse
    {
        return response()->json((new ClientSearchService())->execute($request->input('filter')));
    }
}
