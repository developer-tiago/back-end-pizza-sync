<?php

namespace App\Services\Category;

use App\Models\Category;

class CategoryAllService
{
    public function execute()
    {
        return Category::all();
    }
}
