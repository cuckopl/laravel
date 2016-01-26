<?php 
 namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Emails;


class EmailController extends CrudBaseController {

    protected $controllerView = 'admin/email-controller';
    
    protected function getModel() {
        return new  Emails;
    }

}
