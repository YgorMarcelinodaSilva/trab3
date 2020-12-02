<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChamadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chamado')->insert([
            'codigo' => '1',
            'titulo' => 'lençol rasgado',
            'urgencia' => 'grave',
            'descricao' => 'lençol verde rasgado'
        ]);
    }
}
