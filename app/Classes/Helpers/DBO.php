<?php

namespace App\Classes\Helpers;

use DB;

class DBO
{
    public static function tables($schema = 'public')
    {
        $blacklist = [
            'migrations',
            'group_roles',
            'password_resets',
            'roles_privileges',
            'user_privilege',
        ];
        $conn = getenv('DB_CONNECTION');
        $query = null;
        switch ($conn)
        {
            case 'pgsql':
                return DB::connection($conn)->table('information_schema.tables')
                                                ->where('table_schema', $schema)
                                                ->whereNotIn('table_name', $blacklist)
                                                ->get();
        }
    }
}