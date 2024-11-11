<?php

namespace App\Services\Category;

use App\Models\Category;

class CategoryDeleteService
{
    public function execute(string $id)
    {
        Category::find($id)->delete();

        return ['message' => 'Category deleted successfully!'];
    }
}
