<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoAtividadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TipoAtividade')->insert([
            'telefonema' => 't',
            'email' => 'e',
            'visita' => 'v',
        ]);
    }
}
