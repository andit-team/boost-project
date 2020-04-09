<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->truncate();
        $statement = "INSERT INTO `permissions` (`id`, `parent_id`, `name`, `slug`, `description`) VALUES
        /**User management */
        (1, 0, 'User Management', 'user-management', 'Getting User Management Menus'),
            (2, 1, 'User Menu', 'user-menu', 'Getting User Menus'),
            (3, 1, 'User list', 'user-index', 'Can view all user list'),
            (4, 1, 'View User', 'user-view', 'Can view a user'),
            (5, 1, 'Add User', 'user-add', 'Can add a user'),
            (6, 1, 'store User', 'user-store', 'Can store a user'),
            (7, 1, 'Edit User', 'user-edit', 'Can edit a user'),
            (8, 1, 'update User', 'user-update', 'Can update user'),
            (9, 1, 'delete User', 'user-delete', 'Can update user'),
            (10, 1, 'Role Menu', 'role-menu', 'Getting Role Menus'),
            (11, 1, 'role list', 'role-index', 'Can view all role list'),
            (12, 1, 'View role', 'role-view', 'Can view a role'),
            (13, 1, 'Add role', 'role-add', 'Can add a role'),
            (14, 1, 'store role', 'role-store', 'Can store a role'),
            (15, 1, 'Edit role', 'role-edit', 'Can edit a role'),
            (16, 1, 'update role', 'role-update', 'Can update role'),
            (17, 1, 'delete role', 'role-delete', 'Can update role'),
            (18, 1, 'permission Menu', 'permission-menu', 'Getting permission Menus'),
            (19, 1, 'permission list', 'permission-index', 'Can view all permission list'),
            (20, 1, 'View permission', 'permission-view', 'Can view a permission'),
            (21, 1, 'Add permission', 'permission-add', 'Can add a permission'),
            (22, 1, 'store permission', 'permission-store', 'Can store a permission'),
            (23, 1, 'Edit permission', 'permission-edit', 'Can edit a permission'),
            (24, 1, 'update permission', 'permission-update', 'Can update permission'),
            (25, 1, 'delete permission', 'permission-delete', 'Can update permission'),
            (26, 1, 'User Activities', 'activities', 'View all user activities'),
            (27, 1, 'Notifacations', 'notifacation', 'View all Notifacation')

            ";
            DB::unprepared($statement);
    }
}
// 142