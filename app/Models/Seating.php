<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Seating extends Model
{
    use HasUuid;

    protected $table = 'products';

    protected $fillable = [
        'name'
    ];
}
