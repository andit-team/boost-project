<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
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
          'name'           => 'CW2345',
          'slug'           => 'CW2345', 
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'VW4532',
          'slug'           => 'VW4532',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'XZ876',
          'slug'           => 'XZ876',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
      [
          'name'           => 'PM669',
          'slug'           => 'PM669',
          'user_id'        => '2',
          'created_at'     => now(),
          'updated_at'     => now()
      ],
    ];

    DB::table('tags')->insert($data);
    }
}
