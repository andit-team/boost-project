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
          'name'                => 'Akash',
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
          'name'                => 'Arman',
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
          'name'                => 'Abir',
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
          'name'                => 'Arif',
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
          'name'                => 'Anibarn',
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
          'name'                => 'Amit',
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
          'name'                => 'Ankur',
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
          'name'                => 'Ahona',
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
          'name'                => 'Annonna',
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
