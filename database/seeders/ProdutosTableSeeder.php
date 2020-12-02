<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produtos')->insert([
            'codigo' => '1',
            'categoria' => 'roupas de cama',
            'nome' => 'lençol',
            'quantidade' => '1',
            'descricao' => 'lençol verde novo'
        ]);
    }
}
