<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert(
            [
                [
                    'type' => 'Belgique',
                    'continent' => 'Europe',
                ],
               
            ]
        );
    }
}
