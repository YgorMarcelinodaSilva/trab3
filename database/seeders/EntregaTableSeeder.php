<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntregaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('entrega')->insert([
            'codigo' => '1',
            'cidade' => 'poa',
            'bairro' => 'tinga',
            'rua' => 'a',
            'numero' => '9'
        ]);
    }
}
