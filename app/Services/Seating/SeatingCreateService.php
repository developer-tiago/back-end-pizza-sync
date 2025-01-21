<?php

namespace App\Services\Seating;

use App\Models\Seating;

class SeatingCreateService
{
    public function execute($request, $accountId)
    {
        Seating::create([
            'account_id'    => $accountId,
            'name'          => $request['name'],
        ]);

        return ['message' => 'Seating Created Successfully!'];
    }
}
