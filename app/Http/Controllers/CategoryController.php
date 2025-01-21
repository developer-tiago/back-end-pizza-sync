<?php

namespace App\Http\Controllers;

use App\Services\Category\CategoryAllService;
use App\Services\Category\CategoryCreateService;
use App\Services\Category\CategoryDeleteService;
use App\Services\Category\CategoryPaginateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function paginate(Request $request): JsonResponse
    {
        return response()->json((new CategoryPaginateService())->execute($request->header('account_id')));
    }

    public function index(Request $request)
    {
        return response()->json((new CategoryAllService())->execute($request->header('account_id')));
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json((new CategoryCreateService())->execute($request->all(), $request->header('account_id')));
    }

    public function destroy(string $id): JsonResponse
    {
        return response()->json((new CategoryDeleteService())->execute($id));
    }
}
