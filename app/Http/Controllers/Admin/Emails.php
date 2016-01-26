<?php 
 namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Emails;


class Emails extends CrudBaseController {

    protected $controllerView = 'admin/emails';
    
    protected function getModel() {
        return new  Emails;
    }

}
