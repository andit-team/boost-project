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
        'parent_id'      => 0,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Fatua',
        'slug'           => 'B222',
         'parent_id'      => 0,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Kamij',
        'slug'           => 'B333',
          'parent_id'      => 0,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Showes',
        'slug'           => 'B444',
          'parent_id'      => 0,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'watch',
        'slug'           => 'B555',
          'parent_id'      => 0,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Sun Glass',
        'slug'           => 'B666',
          'parent_id'      => 0,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],



      [
        'name'           => 'Jamdani',
        'slug'           => 'B11ee',
        'parent_id'      => 1,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Suti',
        'slug'           => 'B22',
         'parent_id'      => 2,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Slik',
        'slug'           => 'B3oko',
          'parent_id'      => 3,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Cotton',
        'slug'           => 'B4vcxfbg4',
          'parent_id'      => 4,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'Black',
        'slug'           => 'B555',
          'parent_id'      => 5,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      [
        'name'           => 'White',
        'slug'           => 'B66g6',
          'parent_id'      => 5,
        'user_id'        => '2',
        'created_at'     => now(),
        'updated_at'     => now()
      ],
      
    ];

    DB::table('categories')->insert($data);
   }

  }
