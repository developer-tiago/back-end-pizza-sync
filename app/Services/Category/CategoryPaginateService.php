<?php

namespace App\Services\Category;

use App\Models\Category;

class CategoryPaginateService
{
    public function execute($accountId)
    {
        return Category::where('account_id', $accountId)
            ->orderBy('name')
            ->paginate(10);
    }
}
