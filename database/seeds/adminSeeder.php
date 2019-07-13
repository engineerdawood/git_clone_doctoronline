<?php

use Illuminate\Database\Seeder;
use App\admin;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::table('admin')->insert([
            'adminname' => 'admin',
            'adminemail'    => 'admin@admin.com',
            'adminmobile'   => '03001234567',
            'adminpassword' =>'admin',
        ]);
    }
}
