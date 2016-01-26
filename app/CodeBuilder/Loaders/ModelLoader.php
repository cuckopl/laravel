<?php

namespace App\CodeBuilder\Loaders;

/**
 * Description of ControllerLoader
 *
 * @author Pawel Cudzilo cuckopl@gmail.com MIT
 */
class ModelLoader extends SimpleCrudLoader {

    use \App\View\ViewRenderer;

    public function __construct() {
        $this->setTemplate('model-template');
        $this->dir = 'Model/';
    }

    public function generate($data) {
        $this->addViewVariables(array('data' => $data));
        $path = app_path() . '/' . $this->dir;
        $fileManager = $this->getFileManager($path);
        $fileManager->setFileName($data->modelName . '.php');
        $fileManager->setContentFile($this->renderView());
        $fileManager->save();
    }

    protected function getFileManager($dir) {
        return new \App\CodeBuilder\FileManager($dir);
    }

}
