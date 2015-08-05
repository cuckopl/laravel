<?php

namespace App\CodeBuilder\Loaders;

/**
 * Description of ControllerLoader
 *
 * @author Pawel Cudzilo cuckopl@gmail.com MIT
 */
class IndexLoader extends SimpleCrudLoader {

    use \App\View\ViewRenderer;

    public function __construct() {
        $this->setTemplate('index-template');
        $this->dir = 'resources/views/admin/';
    }

    public function generate($data) {
        $this->addViewVariables(array('data' => $data));
        $fileManager = $this->getFileManager($data->routes->getControllerViewPath());
        $fileManager->setFileName('index.blade.php');
        $fileManager->setContentFile($this->renderView());
        $fileManager->save();
    }

    protected function getFileManager($dir) {
        return new \App\CodeBuilder\FileManager($dir);
    }

}
