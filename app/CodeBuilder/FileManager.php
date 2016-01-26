<?php

namespace App\CodeBuilder;

/**
 * Description of FileManager
 *
 * @author Pawel
 */
class FileManager {

    protected $dir;
    protected $fileName;
    protected $content;
    protected $errors;

    public function __construct($dir) {
        $this->setDir($dir);
    }

    public function setDir($dir) {
        $this->dir = $dir;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    public function fileExists($dir = null) {
        $path = $this->objectVarExist('dir', $dir);
        if (file_exists($path)) {
            return true;
        }
        return false;
    }

    public function makeDir($dir = null) {
        $path = $this->objectVarExist('dir', $dir);
        if ($this->fileExists($path)) {
            
        }
        if (!mkdir($path, 0777, true)) {
            $this->addError("Can't create file" . $path);
        }
    }

    public function save() {
        if (!$this->fileExists()) {
            $this->makeDir();
        }
        $myfile = fopen($this->dir . $this->fileName, "w");
        fwrite($myfile, $this->content);
        fclose($myfile);
    }

    public function setContentFile($content) {
        $this->content = $content;
    }

    protected function addError($error) {
        $this->errors[] = $error;
    }

    private function objectVarExist($name, $value) {
        if (!empty($value)) {
            return $value;
        }
        if (isset($this->$name)) {
            return $this->$name;
        }

        throw new \InvalidArgumentException(sprintf('%s variable must be specified in file manager class', $name));
    }

    public function getErrors() {
        return $this->errors;
    }

}
