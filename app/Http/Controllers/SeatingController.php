<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Seating\SeatingCreateService;
use App\Services\Seating\SeatingDeleteService;
use App\Services\Seating\SeatingPaginateService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SeatingController extends Controller
{
    public function paginate(Request $request): JsonResponse
    {
        return response()->json((new SeatingPaginateService())->execute($request->header('account_id')));
    }

    public function store(Request $request): JsonResponse
    {
        return response()->json((new SeatingCreateService())->execute($request->all(), $request->header('account_id')));
    }

    public function destroy(string $id): JsonResponse
    {
        return response()->json((new SeatingDeleteService())->execute($id));
    }
}
