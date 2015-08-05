<?php

namespace App\DataTables\Base;

interface ColumnInterface {


    public function render($value, $row);
}
