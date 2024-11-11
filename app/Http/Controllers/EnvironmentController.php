<?php

namespace App\Http\Controllers;

use App\Services\Environment\EnvironmentAllService;
use App\Services\Environment\EnvironmentCreateService;
use App\Services\Environment\EnvironmentDeleteService;
use App\Services\Environment\EnvironmentPaginateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EnvironmentController extends Controller
{
    public function paginate()
    {
        return response()->json((new EnvironmentPaginateService())->execute());
    }

    public function index(): JsonResponse
    {
        return response()->json((new EnvironmentAllService())->execute());
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json((new EnvironmentCreateService())->execute($request->all()));
    }

    public function destroy(string $id): JsonResponse
    {
        return response()->json((new EnvironmentDeleteService())->execute($id));
    }
}
