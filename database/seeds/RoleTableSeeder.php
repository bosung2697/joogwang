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

        $role_admin = new \App\Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'administrator';
        $role_admin->save();


    }
}
