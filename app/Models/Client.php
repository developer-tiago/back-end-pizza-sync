<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasUuid;

    protected $table = 'clients';

    protected $fillable = [
        'account_id',
        'country_id',
        'name',
        'email',
        'phone_prefix',
        'phone',
        'street',
        'number',
        'neighborhood',
        'city',
        'complement'
    ];
}
