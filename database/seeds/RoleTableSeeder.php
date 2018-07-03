<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Role::truncate();
        $role_user = new \App\Role();
        $role_user->name = 'user';
        $role_user->description = 'free user';
        $role_user->save();

        $role_admin = new \App\Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'administrator';
        $role_admin->save();
    }
}
