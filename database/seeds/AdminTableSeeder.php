<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Admin::truncate();
        $role_admin = \App\Role::where('name', 'admin')->first();

        $admin = new \App\Admin();
        $admin->username = 'admin';
        $admin->name = 'Test Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('secret');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
