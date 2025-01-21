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
    public function paginate(Request $request)
    {
        return response()->json((new EnvironmentPaginateService())->execute($request->header('account_id')));
    }

    public function index(Request $request): JsonResponse
    {
        return response()->json((new EnvironmentAllService())->execute($request->header('account_id')));
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json((new EnvironmentCreateService())->execute($request->all(), $request->header('account_id')));
    }

    public function destroy(string $id): JsonResponse
    {
        return response()->json((new EnvironmentDeleteService())->execute($id));
    }
}
