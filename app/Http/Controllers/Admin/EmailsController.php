<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmailsController extends CrudBaseController {

    const ControllerRoutePrefix = 'email-controller';
    const ControllerName = 'EmailsController';

    public function index() {
        $cr = new \App\CodeBuilder\CrudBuilder();
        $cr->generate();
    }

    protected function setCrudModelEntity() {
        $this->model = new \App\model\Email();
    }

    protected function getModel() {
        
    }

}
