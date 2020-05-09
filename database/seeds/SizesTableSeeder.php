<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
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
                'name'           => 'Long',
                'item_size'      => 'LG',
                'slug'           => 'long' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Lagre',
                'item_size'      => 'XL',
                'slug'           => 'lagre' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Small',
                'item_size'      => 'SM',
                'slug'           => 'small' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Medium',
                'item_size'      => 'MD',
                'slug'           => 'medium' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Extra_Large',
                'item_size'      => 'XXL',
                'slug'           => 'extralarge' ,                           
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],          
          ];
      
          DB::table('sizes')->insert($data);
         }
      
    }
}
