<?php 
 namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ArticleComments;


class ArticleControllerTest extends CrudBaseController {

    protected $controllerView = 'admin/article-controller-test';
    
    protected function getModel() {
        return new  ArticleComments;
    }

    protected function getTableActions() {
        
    }

}
