<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductCreateService
{
    public function execute($request)
    {
        Product::create([
            'category_id'       => $request['category_id'],
            'environment_id'    => $request['environment_id'],
            'name'              => $request['name'],
            'description'       => $request['description'],
            'code'              => $request['code'],
            'price'             => $request['price']
        ]);

        return ['message' => 'Product Created Successfully!'];
    }
}
