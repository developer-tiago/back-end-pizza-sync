<?php

namespace App\Http\Controllers;

use App\Services\Client\ClientCreateService;
use App\Services\Client\ClientDeleteService;
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

    public function store(Request $request)
    {
        return response()->json((new ClientCreateService())->execute($request->all()));
    }

    public function destroy(string $id): JsonResponse
    {
        return response()->json((new ClientDeleteService())->execute($id));
    }

    public function search(Request $request): JsonResponse
    {
        return response()->json((new ClientSearchService())->execute($request->input('filter')));
    }
}
