<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntermediaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intermediaires')->insert([
            [
                'nom' => 'Local',
                'etage_id' => 1,


            ],
            [
                'nom' => 'Classe',
                'etage_id' => 1,


            ],
            [
                'nom' => 'Sanitaire',
                'etage_id' => 1,

            ],
        ]);
    }
}
