<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                DB::statement('SET FOREIGN_KEY_CHECKS=0');
                // DB::table('customers')->truncate();
                DB::table('categories')->truncate();
                DB::table('couriers')->truncate();
                DB::table('currencies')->truncate();
                DB::table('promotion_heads')->truncate();
                DB::table('customers')->truncate();
                DB::table('shops')->truncate();
                DB::table('tags')->truncate();
                DB::table('permissions')->truncate();
                DB::table('roles')->truncate();
                DB::table('colors')->truncate();
                DB::table('brands')->truncate();
                DB::table('sizes')->truncate();
                DB::table('attributes')->truncate();
                DB::table('attribute_metas')->truncate();
                DB::table('inventory_attributes')->truncate();
                DB::table('inventory_attribute_options')->truncate();
                DB::table('inventory_attribute_category')->truncate();
                DB::table('users')->truncate();


        $this->call([
                RoleTableSeeder::class,
                // CustomersTableSeeder::class,
                PermissionTableSeeder::class,
                UserTableSeeder::class,
                CategoriesTableSeeder::class,
                CuriersTableSeeder::class,
                CurrenciesTableSeeder::class,
                PromotionHeadsTableSeeder::class,
                MerchantsTableSeeder::class,
                ShopsTableSeeder::class,
                TagsTableSeeder::class,
                ColorsTableSeeder::class,
                BrandTableSeeder::class,
                // SizesTableSeeder::class,
                InventoryAttributesSeeder::class,

        ]);
    }
}
