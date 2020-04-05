<?php

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

             [
                'name'                => 'Akash',
                'dob'                 => '10/2/2000',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'name'                => 'Arman',
                'dob'                 => '10/2/2000',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'name'                => 'Abir',
                'dob'                 => '10/2/2000',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'name'                => 'Arif',
                'dob'                 => '10/2/2000',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'name'                => 'Anibarn',
                'dob'                 => '10/2/2000',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'name'                => 'Amit',
                'dob'                 => '10/2/2000',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'name'                => 'Ankur',
                'dob'                 => '10/2/2000',
                'gender'              => 'Active',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'name'                => 'Ahona',
                'dob'                 => '10/2/2000',
                'gender'              => 'Female',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],

            [
                'name'                => 'Annonna',
                'dob'                 => '10/2/2000',
                'gender'              => 'Female',
                'description'         => 'Student',
                'last_visited_at'     => '10-2-2020',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
        ];

        DB::table('sellers')->insert($data);
       }
}
