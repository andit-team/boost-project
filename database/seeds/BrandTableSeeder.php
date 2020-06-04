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
                'description'    => 'It comprises numerous affiliated businesses.' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            
            [
                'name'           => 'Nokia', 
                'description'    => 'Nokia is a Finnish multinational corporation . ' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Huawei', 
                'description'    => 'Huawei has deployed its products and services.' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'RFL', 
                'description'    => 'About Us Details RFL started its journey in 1980. ' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Aarong', 
                'description'    => 'Aarong is the top lifestyle retailer in Bangladesh .' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Richman', 
                'description'    => 'It is popular for men’s wear. ' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
        ];

        DB::table('brands')->insert($data);
    }
}
