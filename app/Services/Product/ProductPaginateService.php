<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductPaginateService
{
    public function execute()
    {
        return Product::with([
            'category' => function ($query) {
                $query->select('id', 'name');
            }
        ])->paginate(10);
    }
}
