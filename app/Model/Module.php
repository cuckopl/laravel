<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Module extends Model {

    protected $fillable = array(
        'name', 'table_name', 'description'
    );

    public function dynamicRoute() {
        return $this->hasMany('App\Model\DynamicRoutes','module_id','id');
    }

}
