<?php 
 
namespace App\Http\Controllers\Admin;

//this controller wos auto genereted by crud builder

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\DynamicRoutes as asd;


class DynamicRoutes extends CrudBaseController {

    protected $controllerView = 'admin/dynamic-routes';
    
    protected function getModel() {
        return new  asd;
    }
    
    protected function getTableActions(){
        $tableActions = new \App\DataTables\Columns\CustomActions();
        $tableActions->setDeleteRoute('DynamicRoutesDestroy');
        $tableActions->setEditRoute('DynamicRoutesEdit');
    return $tableActions;
    }

}
