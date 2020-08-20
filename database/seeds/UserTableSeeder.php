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
                'email'         => 'buyer@boost.com',
                'password'      => '123456', //123456
                'type'          => 'customers',
                'created_at'    => now(),
                'updated_at'    => now()
        ];
        $user = \Sentinel::registerAndActivate($users);
        $role = \Sentinel::findRoleBySlug('buyer');
        $role->users()->attach($user->id);

        $users = [
                'first_name'    => 'Rofiq',
                'last_name'     => 'Mia',
                'email'         => 'seller@boost.com',
                // 'email'         => 'and.baazar@yahoo.com',
                'password'      => '123456', //123456
                'type'          => 'merchant',
                'created_at'    => now(),
                'updated_at'    => now()
        ];
        $user = \Sentinel::registerAndActivate($users);
        $role = \Sentinel::findRoleBySlug('seller');
        $role->users()->attach($user->id);

        $users = [
                'first_name'    => 'Oli',
                'last_name'     => 'Mia',  
                'email'         => 'and.baazar@yahoo.com',
                'password'      => '123456', //123456
                'type'          => 'merchant',
                'created_at'    => now(),
                'updated_at'    => now()
        ];
        $user = \Sentinel::registerAndActivate($users);
        $role = \Sentinel::findRoleBySlug('seller');
        $role->users()->attach($user->id);

    }
}
