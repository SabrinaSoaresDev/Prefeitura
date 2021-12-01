<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceptividadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receptividade')->insert([
            'ganho'=> 'g',
            'esperança' => 'e',
            'perda' => 'p'
        ]);
    }
}
