<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductPaginateService
{
    public function execute($accountId)
    {
        return Product::with([
            'category' => function ($query) {
                $query->select('id', 'name');
            }
        ])
            ->where('account_id', $accountId)
            ->paginate(10);
    }
}
