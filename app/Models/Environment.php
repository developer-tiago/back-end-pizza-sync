<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasUuid;

    protected $table = 'environments';

    protected $fillable = [
        'name'
    ];
}
