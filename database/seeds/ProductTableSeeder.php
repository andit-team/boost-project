<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
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
               'product_name' => 'Product-1',
               'slug' => 'Product-1',
               'price' => 10,
               'weight' => 250,
               'user_id' => 1,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
            'product_name' => 'Product-2',
            'slug' => 'Product-2',
            'price' => 15,
            'weight' => 250,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'product_name' => 'Product-3',
            'slug' => 'Product-3',
            'price' => 20,
            'weight' => 300,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'product_name' => 'Product-4',
            'slug' => 'Product-4',
            'price' => 25,
            'weight' => 300,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'product_name' => 'Product-5',
            'slug' => 'Product-5',
            'price' => 30,
            'weight' => 500,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'product_name' => 'Product-6',
            'slug' => 'Product-6',
            'price' => 35,
            'weight' => 750,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ],
        ];
        DB::table('products')->insert($data);
    }
}
