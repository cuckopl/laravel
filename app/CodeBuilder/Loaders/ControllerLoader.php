<?php

namespace App\CodeBuilder\Loaders;

/**
 * Description of ControllerLoader
 *
 * @author Pawel Cudzilo cuckopl@gmail.com MIT
 */
class ControllerLoader extends SimpleCrudLoader {

    use \App\View\ViewRenderer;

    public function __construct() {
        $this->setTemplate('controller-template');
        $this->dir = 'Http/Controllers/Admin/';
    }

    public function generate($data) {
        $this->addViewVariables(array('data' => $data));
        $path = app_path() . '/' . $this->dir;
        $fileManager = $this->getFileManager($path);
        $fileManager->setFileName($data->controllerName . '.php');
        $fileManager->setContentFile($this->renderView());
        $fileManager->save();
    }

    protected function getFileManager($dir) {
        return new \App\CodeBuilder\FileManager($dir);
    }

}
