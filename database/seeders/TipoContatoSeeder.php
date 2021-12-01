<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TipoContato')->insert([
            'ponto focal'=> 'pf',
            'prefeito'=>  'p',
            'secretario'=> 's'
             ]);
    }
}
