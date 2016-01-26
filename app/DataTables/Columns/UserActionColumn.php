<?php

namespace App\DataTables\Columns;

Class UserActionColumn extends \App\DataTables\Base\BaseColumn {

    public function createArgs($value, $row) {
        $this->setTemplate('admin.data-tables.user-action-data-table');
        $this->addViewVariables(array('value' => $value,
            'route' => $this->createRoute($row->id),
            'routeDestroy' => route('destroyUser', $row->id),
        ));
    }

    protected function createRoute($id) {
        return route('getUser', $id);
    }

    /*
     * $this->renderView() trait and render view from obhect variables
     * $this->args;
     * $this->template;
     * 
     */

    public function render($value, $row) {
        $this->createArgs($value, $row);
        return $this->renderView();
    }

}
