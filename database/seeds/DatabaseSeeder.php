<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\admin::truncate();
        \App\patient::truncate();

        DB::table('admin')->insert([
            'adminname' => 'admin',
            'adminemail'    => 'admin@admin.com',
            'adminmobile'   => '03001234567',
            'adminpassword' =>'adminadmin',
        ]);

        DB::table('patientreg')->insert([
            'name' => 'user',
            'email'    => 'user@user.com',
            'mobile'   => '03007654321',
            'password' =>'useruser',
            'country'   => 'Pakistan'
        ]);
    }
}
