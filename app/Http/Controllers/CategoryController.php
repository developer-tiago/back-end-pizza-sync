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
    public function paginate(): JsonResponse
    {
        return response()->json((new CategoryPaginateService())->execute());
    }

    public function index()
    {
        return response()->json((new CategoryAllService())->execute());
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json((new CategoryCreateService())->execute($request->all()));
    }

    public function destroy(string $id): JsonResponse
    {
        return response()->json((new CategoryDeleteService())->execute($id));
    }
}
