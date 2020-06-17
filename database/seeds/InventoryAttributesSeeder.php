<?php

use Illuminate\Database\Seeder;

class InventoryAttributesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $data = [
            [
                'name'  => 'size'
            ],
            [
                'name'  => 'storage Capacity'
            ],
        ];

        DB::table('inventory_attributes')->insert($data);
        $options = [
            [
                'inventory_attribute_id'    => 1,
                'option'                    => 'xsm',
            ],
            [
                'inventory_attribute_id'    => 1,
                'option'                    => 'sm',
            ],
            [
                'inventory_attribute_id'    => 1,
                'option'                    => 'm',
            ],
            [
                'inventory_attribute_id'    => 1,
                'option'                    => 'l',
            ],
            [
                'inventory_attribute_id'    => 1,
                'option'                    => 'xl',
            ],
            [
                'inventory_attribute_id'    => 1,
                'option'                    => 'exl',
            ],
            [
                'inventory_attribute_id'    => 2,
                'option'                    => '1 GB',
            ],
            [
                'inventory_attribute_id'    => 2,
                'option'                    => '2 GB',
            ],
            [
                'inventory_attribute_id'    => 2,
                'option'                    => '2.5 GB',
            ],
            [
                'inventory_attribute_id'    => 2,
                'option'                    => '3 GB',
            ],
            [
                'inventory_attribute_id'    => 2,
                'option'                    => '4 GB',
            ],
        ];
        DB::table('inventory_attribute_options')->insert($options);
        
        $cat_rel = [
            [
                'category_id'   => 2,
                'inventory_attribute_id'   => 2,
            ],
            [
                'category_id'   => 3,
                'inventory_attribute_id'   => 1,
            ],
        ];
        DB::table('inventory_attribute_category')->insert($cat_rel);
    }
}
