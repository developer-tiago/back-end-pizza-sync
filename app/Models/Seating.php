<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Seating extends Model
{
    use HasUuid;

    protected $table = 'seatings';

    protected $fillable = [
        'account_id',
        'name'
    ];
}
