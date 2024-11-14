<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasUuid;

    protected $table = 'products';

    protected $fillable = [
        'user_logged_id',
        'client_id',
        'total_price',
        'status',
        'type'
    ];
}
