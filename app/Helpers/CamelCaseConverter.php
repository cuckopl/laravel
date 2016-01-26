<?php

namespace App\Helpers;

/**
 * Description of NotationConverter
 *
 * @author Pawel
 */
class CamelCaseConverter {

    public static function CamelCaseTo($name, $connector = '_') {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1' . $connector . '$2', $name));
    }

    public static function MakeCamelCase($name, $separator = '_') {
        return ucfirst(preg_replace_callback('/' . $separator . '(.?)/', function($matches) {
                    return ucfirst($matches[1]);
                }, $name));
    }

}
