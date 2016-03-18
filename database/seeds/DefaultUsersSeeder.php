<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Groups;
use App\Models\Groups_int_Roles;
use App\Models\Roles_int_Privileges;

class DefaultUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(getenv('ORIGIN_ACCOUNT') && getenv('ORIGIN_EMAIL') && getenv('ORIGIN_PASSWORD') && getenv('ORIGIN_GROUP_ID')) {
            User::create(['name'    => getenv('ORIGIN_ACCOUNT'),
                'email'             => getenv('ORIGIN_EMAIL'),
                'password'          => bcrypt(getenv('ORIGIN_PASSWORD')),
                'group_id'          => getenv('ORIGIN_GROUP_ID'),
                'personal_number'   => getenv('ORIGIN_PERSONAL_NUMBER'),
                'active'            => true
            ]);
        }
        else {
            $this->command->getOutput()->writeln("<error>Could not seed default account, check .env file for ORIGIN account vars</error>");
            exit();
        }
    }
}