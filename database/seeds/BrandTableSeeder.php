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
                'description'    => 'It comprises numerous affiliated businesses, most of them united under the Samsung brand, and is the largest South Korean chaebol (business conglomerate). Samsung was founded by Lee Byung-chul in 1938 as a trading company.' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            
            [
                'name'           => 'Nokia', 
                'description'    => 'Nokia is a Finnish multinational corporation founded on 12 May 1865 as a single paper mill operation. Through the 19th century the company expanded, branching into several different products. In 1967, the Nokia corporation was formed.' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Huawei', 
                'description'    => 'Huawei has deployed its products and services in more than 170 countries. Huawei overtook Ericsson in 2012 as the largest telecommunications equipment manufacturer in the world, and overtook Apple in 2018 as the second-largest manufacturer of smartphones in the world, behind Samsung Electronics.' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'RFL', 
                'description'    => 'About Us Details RFL started its journey with Cast Iron (CI) products in 1980. The initial main objective was to ensure pure drinking water and affordable irrigation instruments for improved rural life.' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Aarong', 
                'description'    => 'Aarong is the top lifestyle retailer in Bangladesh operating under BRAC, a non-profit NGO. The word Aarong means ‘village fair’ and it was formed to uphold native culture, heritage, crafts and styles to empower rural artisans. ' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
            [
                'name'           => 'Richman', 
                'description'    => 'It is popular for men’s wear. Lubnan Trade Consortium Ltd is the mother company of Richman. You will find various lifestyle products under Richman brand. “Committed to Quality” is our only success story, where we stand.' ,                                     
                'user_id'        => '2',
                'created_at'     => now(),
                'updated_at'     => now()
            ],
        ];

        DB::table('brands')->insert($data);
    }
}
