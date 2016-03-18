<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call(DefaultGroupsSeeder::class);
        $this->call(DefaultUsersSeeder::class);
        $this->call(DefaultPrivilegesSeeder::class);
        $this->call(DefaultRolesSeeder::class);
        $this->call(Intersections::class);
    }
}
