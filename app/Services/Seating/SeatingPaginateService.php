<?php

namespace App\Services\Seating;

use App\Models\Seating;

class SeatingPaginateService
{
    public function execute($accountId)
    {
        return Seating::where('account_id', $accountId)
            ->orderBy('name', 'asc')
            ->paginate(10);
    }
}
