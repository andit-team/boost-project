<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = [
            [
                'name'       => 'Austria',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Belgium',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Cyprus',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'France',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Germany',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Hungary',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Ireland',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Italy',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Netherlands',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Spain',
                'user_id'    => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('countries')->insert($country);
    }
}
