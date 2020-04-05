<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
        'name'           => 'Shirt',
        'slug'           => 'B111',
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Fatua',
        'slug'           => 'B222',
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Kamij',
        'slug'           => 'B333',
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Showes',
        'slug'           => 'B444',
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'watch',
        'slug'           => 'B555',
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Sun Glass',
        'slug'           => 'B666',
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
    ];

    DB::table('categories')->insert($data);
   }

  }
