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
                DB::table('buyers')->truncate();
                DB::table('categories')->truncate();
                DB::table('couriers')->truncate();
                DB::table('currencies')->truncate();
                DB::table('promotion_heads')->truncate();
                DB::table('sellers')->truncate();
                DB::table('shops')->truncate();
                DB::table('tags')->truncate();
                DB::table('permissions')->truncate();
                DB::table('roles')->truncate();
                DB::table('users')->truncate();

        $this->call([
                BuyersTableSeeder::class,
                PermissionTableSeeder::class,
                RoleTableSeeder::class,
                UserTableSeeder::class,
                CategoriesTableSeeder::class,
                CuriersTableSeeder::class,
                CurrenciesTableSeeder::class,
                PromotionHeadsTableSeeder::class,
                SellersTableSeeder::class,
                ShopsTableSeeder::class,
                TagsTableSeeder::class,
        ]);
    }
}
