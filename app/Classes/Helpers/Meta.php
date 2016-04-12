<?php
namespace App\Classes\Helpers;


use App\Models\MetaDefaults;
use App\Models\MetaRoutes;

class Meta
{
    public static function get($routeName)
    {
        $string = '';
        $routes = MetaRoutes::where('route_name', $routeName)->get();
        foreach($routes as $route) {
            $string .= "<meta http-equiv='".$route['tag_name']."' content='".$route['tag_value']."'>"."\n";
        }

        return $string;
    }
}