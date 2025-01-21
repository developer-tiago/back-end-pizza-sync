<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasUuid;

    protected $table = 'orders';

    protected $fillable = [
        'account_id',
        'environment_id',
        'product_id',
        'seating_id',
        'quantity',
        'observations',
        'status'
    ];
}
