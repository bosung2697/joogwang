<?php

use Illuminate\Database\Seeder;

class AwardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = App\Admin::all();

        $admins->each(function ($admin) {
            $admin->awards()->save(
                factory(App\Awards::class)->make()
            );
        });
    }
}
