<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Route;

class DynamicRoutes extends Model {
    
        protected $fillable = array(
        'name'
    );

    public static function loadDataBaseRoutes() {
        $routes = self::all();

        foreach ($routes as $route) {
            eval($route->code_eval);
        }
    }

    public static function getDynamicRouts() {
        return  self::where('name', '=', 'index')->get();
    }
    
    public function module() {
      return $this->belongsTo('App\Model\Module','module_id');
    }

}
