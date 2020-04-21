<?php

use Illuminate\Database\Seeder;

class CuriersTableSeeder extends Seeder
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
          'name'           => 'Continental',
          'user_id'        => '2',
          'desc'           => '',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'Sa Paribahan',
          'user_id'        => '2',
          'desc'           => '',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'Sundarban',
          'user_id'        => '2',
          'desc'           => '',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
    ];

    DB::table('couriers')->insert($data);
   }

    }
