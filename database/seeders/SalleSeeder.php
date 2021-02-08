<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('salles')->insert([
            [
                'nom' => 'Musique',
                'code' => '',
                'etage_id' => 1,
                'intermediaire_id' => 1,

            ],
            [
                'nom' => 'Vestiaire',
                'code' => '-1P.08',
                'etage_id' => 1,
                'intermediaire_id' => 3,

            ],
            [
                'nom' => 'Local surveillant',
                'code' => '-1P.14',
                'etage_id' => 1,
                'intermediaire_id' => 1,

            ],
            [
                'nom' => 'Vestiaire',
                'code' => '',
                'etage_id' => 1,
                'intermediaire_id' => 3,

            ],
            [
                'nom' => 'Vestiaire',
                'code' => '',
                'etage_id' => 1,
                'intermediaire_id' => 3,

            ],
            [
                'nom' => 'SGP',
                'code' => '',
                'etage_id' => 2,
                'intermediaire_id' => 1,
            ],
            [
                'nom' => 'Vestiaire',
                'code' => '',
                'etage_id' => 2,
                'intermediaire_id' => 3,
            ],
            [
                'nom' => 'Vestiaire',
                'code' => '',
                'etage_id' => 2,
                'intermediaire_id' => 3,
            ],
            [
                'nom' => 'Local surveillant',
                'code' => '',
                'etage_id' => 2,
                'intermediaire_id' => 1,
            ],
            [
                'nom' => 'Salle video',
                'code' => '0P.03',
                'etage_id' => 2,
                'intermediaire_id' => 1,
            ],
            [
                'nom' => 'WC cours primaire',
                'code' => '0P.03',
                'etage_id' => 2,
                'intermediaire_id' => 3,
            ],
            [
                'nom' => 'Classe',
                'code' => '0P.08',
                'etage_id' => 2,
                'intermediaire_id' => 2,
            ],
        ]);
    }
}
