<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'id'                => 1,
            'name'              => 'Brasil',
            'acronym'           => 'BRA',
            'currency'          => 'BRL',
            'currency_symbol'   => 'R$',
            'phone_prefix'      => '55'
        ]);
    }
}
