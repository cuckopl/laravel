<?php

namespace App\Http\Controllers\Admin;

//this controller wos auto genereted by crud builder

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\ArticleComments;

class LearningControllerPolCode extends CrudBaseController {

    protected $controllerView = 'admin/learning-controller-pol-code';

    protected function getModel() {
        return new ArticleComments;
    }

    protected function getTableActions() {
        $tableActions = new \App\DataTables\Columns\CustomActions();
        $tableActions->setDeleteRoute('LearningControllerPolCodeDestroy');
        $tableActions->setEditRoute('LearningControllerPolCodeEdit');
        return $tableActions;
    }

    public function index() {
        $data = \App\Model\DynamicRoutes::last()->module;
        dd($data);
    }

}
