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
                'first_name'          => 'Akash',
                'last_name'           => 'Mia',
                'slug'                => 'akash',
                'email'               => 'akash@gmail.com',
                'dob'                 => '2000-01-03',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '2015-01-03',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'status'              => 'Inactive',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'first_name'          => 'Arman',
                'last_name'           => 'Mia',
                'slug'                => 'arman',
                'email'               => 'arman@gmail.com',
                'dob'                 => '2000-01-03',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '2015-01-03',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'status'              => 'Inactive',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'first_name'          => 'Abir',
                'last_name'           => 'Mia',
                'slug'                => 'abir',
                'email'               => 'abir@gmail.com',
                'dob'                 => '2000-01-03',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '2015-01-03',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'status'              => 'Reject',
                'user_id'             => '1',
                'created_at'          => now(),
                'updated_at'          => now()
            ],
            [
                'first_name'          => 'Arif',
                'last_name'           => 'Mia',
                'slug'                => 'arif',
                'email'               => 'arif@gmail.com',
                'dob'                 => '2000-01-03',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '2015-01-03',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'user_id'             => '1',
                'status'              => 'Inactive',
                'created_at'          => now(),
                'updated_at'          => now()
            ], 
            [
                'first_name'          => 'Rofiq',
                'last_name'           => 'Mia', 
                'slug'                => 'rofiq',
                'email'               => 'seller@andit.com', 
                'dob'                 => '2000-01-03',
                'gender'              => 'Male',
                'description'         => 'Student',
                'last_visited_at'     => '2015-01-03',
                'last_visited_from'   => '10.00am',
                'verification_token'  => '2',
                'remember_token'      => 'M2',
                'status'              => 'Active',
                'user_id'             => '3',
                'created_at'          => now(),
                'updated_at'          => now()
            ], 
        ];

        DB::table('sellers')->insert($data);
       }
}
