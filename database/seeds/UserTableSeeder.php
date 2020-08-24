<?php

use Illuminate\Database\Seeder;
// use Sentinel;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
                'first_name'    => 'Admin',
                'last_name'     => 'AndIt',
                'type'          => 'admin',
                'email'         => 'admin@boost.com',
                'password'      => '123456', //123456
                'created_at'    => now(),
                'updated_at'    => now()
        ];
        $user = \Sentinel::registerAndActivate($users);
        $role = \Sentinel::findRoleBySlug('admin');
        $role->users()->attach($user->id);
        $users = [
                'first_name'    => 'Sofiq',
                'last_name'     => 'Mia',
                'email'         => 'customer@boost.com',
                'password'      => '123456', //123456
                'type'          => 'customer',
                'created_at'    => now(),
                'updated_at'    => now()
        ];
        $user = \Sentinel::registerAndActivate($users);
        $role = \Sentinel::findRoleBySlug('customer');
        $role->users()->attach($user->id);

        $users = [
                'first_name'    => 'Rofiq',
                'last_name'     => 'Mia',
                'email'         => 'bussiness@boost.com',
                // 'email'         => 'and.baazar@yahoo.com',
                'password'      => '123456', //123456
                'type'          => 'bussiness',
                'created_at'    => now(),
                'updated_at'    => now()
        ];
        $user = \Sentinel::registerAndActivate($users);
        $role = \Sentinel::findRoleBySlug('bussiness');
        $role->users()->attach($user->id);

        $users = [
                'first_name'    => 'Oli',
                'last_name'     => 'Mia',  
                'email'         => 'educational@boost.com',
                'password'      => '123456', //123456
                'type'          => 'educational',
                'created_at'    => now(),
                'updated_at'    => now()
        ];
        $user = \Sentinel::registerAndActivate($users);
        $role = \Sentinel::findRoleBySlug('educational');
        $role->users()->attach($user->id);

    }
}
