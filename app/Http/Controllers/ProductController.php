<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Product\ProductCreateService;
use App\Services\Product\ProductDeleteService;
use App\Services\Product\ProductPaginateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function paginate(): JsonResponse
    {
        return response()->json((new ProductPaginateService())->execute());
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json((new ProductCreateService())->execute($request->all()));
    }

    public function destroy(string $id): JsonResponse
    {
        return response()->json((new ProductDeleteService())->execute($id));
    }
}