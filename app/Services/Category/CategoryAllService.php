<?php

namespace App\Services\Category;

use App\Models\Category;

class CategoryAllService
{
    public function execute($accountId)
    {
        return Category::where('account_id', $accountId)->get();
    }
}
