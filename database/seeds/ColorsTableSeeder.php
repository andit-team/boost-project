<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
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
                'name'           => 'Red',
                'color_code'     => '#12AC',
                'slug'           => 'red' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Yellow',
                'color_code'     => '#12ACD',
                'slug'           => 'yellow' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Blue',
                'color_code'     => '#12CD',
                'slug'           => 'blue' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Brown',
                'color_code'     => '#15AC',
                'slug'           => 'brown' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Pink',
                'color_code'     => '#56JKJ',
                'slug'           => 'pink' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'White',
                'color_code'     => '#RTYRF',
                'slug'           => 'white' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Black',
                'color_code'     => '#HGSB',
                'slug'           => 'black' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
          ];
      
          DB::table('colors')->insert($data);
         }
      
  }

