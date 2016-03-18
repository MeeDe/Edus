<?php

use Illuminate\Database\Seeder;
use App\Models\Roles;

class DefaultRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create(['name'=>'Student',                  'descr'=>'Just a student']);
        Roles::create(['name'=>'Teacher',                  'descr'=>'Just a teacher']);
        Roles::create(['name'=>'Administrator',            'descr'=>'Daily administrator']);
        Roles::create(['name'=>'Technical Administrator',  'descr'=>'Admin that manages database, ftp, and other low level stuff. Usually called in emenrgency situations']);
    }
}
