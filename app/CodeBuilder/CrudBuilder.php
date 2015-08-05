<?php

namespace App\CodeBuilder;

/**
 * Description of CrudBuilder
 *
 * @author Pawel
 */
use DB;
use App\Helpers\CamelCaseConverter;

class CrudBuilder implements Interfaces\GeneratorInterface {

    protected $controllerName;
    protected $dirs;
    protected $loaders;
    protected $modelName;
    protected $moduleId;

    public function __construct() {
        $this->addLoader(new Loaders\ControllerLoader());
        $this->addLoader(new Loaders\ModelLoader());
        $this->addLoader(new Loaders\IndexLoader());
    }

    public function setControllerName($controllerName) {
        $this->controllerName = $controllerName;
        return $this;
    }

    public function setModelName($modelName) {
        $this->modelName = $modelName;
        return $this;
    }

    public function generate() {

        $data = $this->prepareData();
        foreach ($this->loaders as $loader) {
            $loader->generate($data);
        }
    }

    public function generateRoutes($controllerName, $modelName) {
        return new Route\RouteGenerator($controllerName, $modelName);
    }

    public function addLoader($loader) {
        $this->loaders[] = $loader;
    }

    protected function prepareData() {
        $data = new \stdClass();
        $routes = $this->generateRoutes($this->controllerName, $this->modelName);
        $routes->genereateCrudRoutes($this->moduleId);
        $data->routes = $routes;
        $data->controllerName = $this->controllerName;
        $data->tableColumns = $this->getTableNames();
        $data->modelName = CamelCaseConverter::MakeCamelCase($this->modelName);
        return $data;
    }

    protected function getTableNames() {
        return DB::getSchemaBuilder()->getColumnListing($this->modelName);
    }

    public function setModuleId($id) {
        $this->moduleId = $id;
    }

}
