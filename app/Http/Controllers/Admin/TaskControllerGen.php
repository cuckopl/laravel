<?php 
 namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Tasks;


class TaskControllerGen extends CrudBaseController {

    protected $controllerView = 'admin/task-controller-gen';
    
    protected function getModel() {
        return new  Tasks;
    }

    protected function getTableActions() {
        
    }

}
