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
        if (config('database.default') !== 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');

        }

        $this->call(RoleTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
//        $this->call(AwardsTableSeeder::class);
        if (config('database.default') !== 'sqlite') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }

}
