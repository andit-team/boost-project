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
                // DB::table('merchants')->truncate();
                DB::table('customers')->truncate(); 
                Db::table('countries')->truncate();
                DB::table('permissions')->truncate();
                DB::table('roles')->truncate(); 
                DB::table('users')->truncate();


        $this->call([ 
                RoleTableSeeder::class,
                CustomersTableSeeder::class,
                PermissionTableSeeder::class,
                UserTableSeeder::class, 
                // MerchantsTableSeeder::class,  
                CountryTableSeeder::class,
        ]);
    }
}
