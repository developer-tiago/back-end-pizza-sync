<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class ServiceOrderItem extends Model
{
    use HasUuid;

    protected $table = 'products';

    protected $fillable = [
        'service_order_id',
        'product_id',
        'quantity',
        'unit_price',
        'total_price',
        'discount',
        'observation'
    ];
}
