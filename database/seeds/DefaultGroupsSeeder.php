<?php

use Illuminate\Database\Seeder;
use App\Models\Groups;

class DefaultGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Groups::create(['name' => 'God', 'desc' => 'You even lift bro?']);
    }
}