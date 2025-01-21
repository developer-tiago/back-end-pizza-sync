<?php

namespace App\Services\Seating;

use App\Models\Seating;

class SeatingDeleteService
{
    public function execute($id)
    {
        Seating::find($id)->delete();

        return ['message' => 'Product deleted successfully!'];
    }
}
