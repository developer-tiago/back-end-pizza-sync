<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductCreateService
{
    public function execute($request, $accountId)
    {
        Product::create([
            'account_id'        => $accountId,
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
