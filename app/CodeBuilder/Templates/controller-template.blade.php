<?php echo "<?php \n "; ?>

namespace App\Http\Controllers\Admin;

//this controller wos auto genereted by crud builder

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\{{$data->routes->getModelName()}};


class {{$data->routes->getControllerName()}} extends CrudBaseController {

    protected $controllerView = '{{'admin/'.$data->routes->getControllerViewFolder()}}';
    
    protected function getModel() {
        return new  {{$data->routes->getModelName()}};
    }
    
    protected function getTableActions(){
        $tableActions = new \App\DataTables\Columns\CustomActions();
        $tableActions->setDeleteRoute('{{$data->routes->aliases['destroy']}}');
        $tableActions->setEditRoute('{{$data->routes->aliases['edit']}}');
    return $tableActions;
    }

}
