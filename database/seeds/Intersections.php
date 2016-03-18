<?php

use Illuminate\Database\Seeder;
use App\Models\Roles_int_Privileges as RP;
use App\Models\Groups_int_Roles as GR;

class Intersections extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // God role own all roles and all their rights
        GR::create(['group_id'=>1, 'role_id'=>4]);
        GR::create(['group_id'=>1, 'role_id'=>3]);
        GR::create(['group_id'=>1, 'role_id'=>2]);
        GR::create(['group_id'=>1, 'role_id'=>1]);

        // Admin role
        RP::create(['role_id'=>3, 'priv_id'=>1]);
        RP::create(['role_id'=>3, 'priv_id'=>2]);
        RP::create(['role_id'=>3, 'priv_id'=>3]);
        RP::create(['role_id'=>3, 'priv_id'=>4]);

        // Tech admin role
        RP::create(['role_id'=>4, 'priv_id'=>1]);
        RP::create(['role_id'=>4, 'priv_id'=>2]);
        RP::create(['role_id'=>4, 'priv_id'=>3]);
        RP::create(['role_id'=>4, 'priv_id'=>4]);
    }
}
