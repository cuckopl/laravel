<?php

namespace App\DataTables\Base;

class BaseConfig {

    public function getPrecessor() {
        return function ($results, $columnDef, $templates) {
            return new \App\DataTables\Processors\CustomProcessor($results, $columnDef, $templates);
        };
    }

}
