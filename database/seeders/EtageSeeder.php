<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etages')->insert([
            [
                'nom' => 'Sous-sol',
                'batiment_id' => '1',

            ],
            [
                'nom' => 'RDC',
                'batiment_id' => '1',

            ],
            [
                'nom' => '1ére',
                'batiment_id' => '1',

            ],
            [
                'nom' => '2éme',
                'batiment_id' => '1',

            ],
            [
                'nom' => '3éme',
                'batiment_id' => '1',

            ],
            [
                'nom' => '4éme',
                'batiment_id' => '1',

            ],
            [
                'nom' => 'Sous-sol',
                'batiment_id' => '2',

            ],
            [
                'nom' => 'RDC',
                'batiment_id' => '2',

            ],
            [
                'nom' => '1ére',
                'batiment_id' => '2',

            ],
            [
                'nom' => '2éme',
                'batiment_id' => '2',

            ],
            [
                'nom' => '3éme',
                'batiment_id' => '2',

            ],
            [
                'nom' => '4éme',
                'batiment_id' => '2',

            ],
        ]);
    }
}
