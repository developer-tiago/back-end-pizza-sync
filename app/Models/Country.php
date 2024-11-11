<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasUuid;

    protected $table = 'countries';

    protected $fillable = [
        'name'
    ];
}
