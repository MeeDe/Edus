<?php

use Illuminate\Database\Seeder;
use App\Models\Privileges;

class DefaultPrivilegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Privileges::create(['route'=>'administrator.index', 'operations'=>'R']);
        Privileges::create(['route'=>'administrator.settings', 'operations'=>'CRUD']);
        Privileges::create(['route'=>'administrator.groups', 'operations'=>'CRUD']);
        Privileges::create(['route'=>'administrator.users', 'operations'=>'CRUD']);
    }
}
