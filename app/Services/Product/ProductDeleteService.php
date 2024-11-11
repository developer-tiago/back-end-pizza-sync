<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductDeleteService
{
    public function execute($id)
    {
        Product::find($id)->delete();

        return ['message' => 'Product deleted successfully!'];
    }
}
