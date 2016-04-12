<?php

namespace App\Classes\Helpers;

use DB;

class DBO
{
    public static function tables($schema = 'public')
    {
        $conn = getenv('DB_CONNECTION');
        $query = null;
        switch ($conn)
        {
            case 'pgsql':
                $query = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$schema';";
                break;
        }

        return DB::select($query);
    }
}