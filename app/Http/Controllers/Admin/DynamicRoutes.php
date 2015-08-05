<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\DynamicRoutes as RouteModel;

class DynamicRoutes extends CrudBaseController {

    protected $controllerView = 'admin/dynamic-routes';

    protected function getModel() {
        return new RouteModel;
    }

}
