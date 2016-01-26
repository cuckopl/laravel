<?php echo "<?php \n "; ?>
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\{{$data->routes->getModelName()}};


class {{$data->routes->getControllerName()}} extends CrudBaseController {

    protected $controllerView = '{{'admin/'.$data->routes->getControllerViewFolder()}}';
    
    protected function getModel() {
        return new  {{$data->routes->getModelName()}};
    }

}
