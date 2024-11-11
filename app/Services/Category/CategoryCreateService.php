<?php

namespace App\Services\Category;

use App\Models\Category;

class CategoryCreateService
{
    public function execute($request)
    {
        Category::create([
            'name'          => $request['name'],
            'description'   => $request['description']
        ]);

        return ['message' => 'Category created successfully!'];
    }
}
