<?php 
 namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ArticleComments;


class TestController extends CrudBaseController {

    protected $controllerView = 'admin/test-controller';
    
    protected function getModel() {
        return new  ArticleComments;
    }

}
