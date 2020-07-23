<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
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
                'name'           => 'Samsung', 
                'description'    => 'It comprises numerous affiliated businesses',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            
            [
                'name'           => 'Nokia', 
                'description'    => 'Nokia is a Finnish multinational corporation',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Huawei', 
                'description'    => 'Huawei has deployed its products and services',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'RFL', 
                'description'    => 'About Us Details RFL started its journey in 1980.',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Aarong', 
                'description'    => 'Aarong is the top lifestyle retailer in Bangladesh ',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Richman', 
                'description'    => 'It is popular for men’s wear.',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
        ];

        DB::table('brands')->insert($data);

        $cat_rel = [
            [
                'category_id'   => 2,
                'brand_id'   => 1,
            ],
            [
                'category_id'   => 2,
                'brand_id'   => 2,
            ],
            [
                'category_id'   => 2,
                'brand_id'   => 3,
            ],
            [
                'category_id'   => 2,
                'brand_id'   => 4,
            ],
            [
                'category_id'   => 2,
                'brand_id'   => 5,
            ],
            [
                'category_id'   => 2,
                'brand_id'   => 6,
            ],
        ];
        DB::table('brand_category')->insert($cat_rel);

    }
}
