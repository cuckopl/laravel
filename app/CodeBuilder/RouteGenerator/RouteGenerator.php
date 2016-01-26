<?php

namespace App\CodeBuilder\RouteGenerator;

/**
 * Description of RouteGenerator
 *
 * @author Pawel
 */
use App\Helpers\CamelCaseConverter;
use App\Model\DynamicRoutes;
use DB;

class RouteGenerator {

    const VIEW_CONTROLLER_PATH = 'resources/views/admin/';

    protected $routes;
    protected $controllerName;
    protected $modelName;
    public $aliases;

    public function __construct($controllerName, $modelName) {
        $this->controllerName = $controllerName;
        $this->modelName = $modelName;
    }

    public function getIndexRotue() {
        return $this->inedxRoute = 'testRoute';
    }

    public function getControllerViewPath() {
        return base_path() . '/' . self::VIEW_CONTROLLER_PATH . $this->getControllerViewFolder() . '/';
    }

    public function getModelName() {
        return CamelCaseConverter::MakeCamelCase($this->modelName);
    }

    public function getTableName() {
        return $this->modelName;
    }

    public function getControllerName() {
        return $this->controllerName;
    }

    public function getControllerViewFolder() {
        return CamelCaseConverter::CamelCaseTo($this->controllerName, '-');
    }

    public function genereateCrudRoutes($moduleId) {

        $prefixRoute = $this->controllerName;

        $this->routes['index'] = "Route::get('/" . $prefixRoute . "', ['as' => '" . $this->controllerName . "Index', 'uses' => '" . $this->controllerName . "@index']);";
        $this->routes['create'] = "Route::get('/" . $prefixRoute . "/create', ['as' => '" . $this->controllerName . "Get', 'uses' => '" . $this->controllerName . "@create']);";
        $this->routes['store'] = "Route::post('/" . $prefixRoute . "', ['as' => '" . $this->controllerName . "Add', 'uses' => '" . $this->controllerName . "@store']);";
        $this->routes['edit'] = "Route::get('/" . $prefixRoute . "/edit/{id}', ['as' => '" . $this->controllerName . "Edit', 'uses' => '" . $this->controllerName . "@edit'])->where('id', '[0-9]+');";
        $this->routes['destroy'] = "Route::delete('/" . $prefixRoute . "/{id}', ['as' => '" . $this->controllerName . "Destroy', 'uses' => '" . $this->controllerName . "@destroy'])->where('id', '[0-9]+');";
        $this->routes['datatable'] = "Route::get('/" . $prefixRoute . "/dataTable', ['as' =>'" . $this->controllerName . "DataTable', 'uses' => '" . $this->controllerName . "@dataTable']);";



        $this->aliases['index'] = $this->controllerName . "Index";
        $this->aliases['create'] = $this->controllerName . "Get";
        $this->aliases['store'] = $this->controllerName . "Add";
        $this->aliases['edit'] = $this->controllerName . "Edit";
        $this->aliases['destroy'] = $this->controllerName . "Destroy";
        $this->aliases['datatable'] = $this->controllerName . "DataTable";

        $this->saveRoutes($moduleId, $this->controllerName);
        return $this->routes;
    }

    public function getDataTableRoute() {
        return $this->controllerName . 'DataTable';
    }

    public function saveRoutes($moduleId, $controllerName) {
        DB::beginTransaction();
        foreach ($this->routes as $name => $route) {
            $dynamicRoute = new DynamicRoutes();
            $dynamicRoute->name = $name;
            $dynamicRoute->code_eval = $route;
            $dynamicRoute->module_id = $moduleId;
            $dynamicRoute->as = $this->controllerName . 'Index';
            if (!$dynamicRoute->save()) {
                DB::rollback();
            }
        }
        DB::commit();
    }

}
