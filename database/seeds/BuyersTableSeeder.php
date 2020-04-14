<?php

use Illuminate\Database\Seeder;

class BuyersTableSeeder extends Seeder
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
          'full_name'                => 'Akash',
          'dob'                 => '2000-01-01',
          'gender'              => 'Male',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],
      [
          'full_name'                => 'Arman',
          'dob'                 => '2000-01-01',
          'gender'              => 'Male',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],
      [
          'full_name'                => 'Abir',
          'dob'                 => '2000-01-01',
          'gender'              => 'Male',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],
      [
          'full_name'                => 'Arif',
          'dob'                 => '2000-01-01',
          'gender'              => 'Male',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],
      [
          'full_name'                => 'Anibarn',
          'dob'                 => '2000-01-01',
          'gender'              => 'Male',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],
      [
          'full_name'                => 'Amit',
          'dob'                 => '2000-01-01',
          'gender'              => 'Male',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],
      [
          'full_name'                => 'Ankur',
          'dob'                 => '2000-01-01',
          'gender'              => 'Male',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],
      [
          'full_name'                => 'Ahona',
          'dob'                 => '2000-01-01',
          'gender'              => 'Female',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],

      [
          'full_name'                => 'Annonna',
          'dob'                 => '2000-01-01',
          'gender'              => 'Female',
          'description'         => 'Student',
          'last_visited_at'     => '2000-01-02',
          'last_visited_from'   => '10.00am',
          'verification_token'  => '2',
          'remember_token'      => 'M2',
          'user_id'             => '1',
          'created_at'  => now(),
          'updated_at'  => now()
      ],
  ];

  DB::table('buyers')->insert($data);
 }
}
