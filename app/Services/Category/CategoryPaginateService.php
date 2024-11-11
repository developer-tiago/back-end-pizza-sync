<?php

namespace App\Services\Category;

use App\Models\Category;

class CategoryPaginateService
{
    public function execute()
    {
        return Category::orderBy('name')->paginate(10);
    }
}
