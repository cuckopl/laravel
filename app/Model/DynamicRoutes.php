<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Route;

class DynamicRoutes extends Model {

    public static function loadDataBaseRoutes() {
        $routes = self::all();

        foreach ($routes as $route) {
            eval($route->code_eval);
        }
    }

    public static function getDynamicRouts() {
        return  self::where('name', '=', 'index')->get();
    
        
    }

}
