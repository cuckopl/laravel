<?php

namespace App\DataTables\Columns;

Class CustomActions extends \App\DataTables\Base\BaseColumn {

    protected $actions = array();
    protected $editRoute;
    protected $deleteRoute;

    public function createArgs($value, $row) {
        $this->setTemplate('admin.data-tables.acl-role-action');
        $this->addViewVariables(array('value' => $value,
            'routeEdit' => route($this->editRoute, $row->id),
            'routeDestroy' => route($this->deleteRoute, $row->id),
        ));
    }

    /*
     * $this->renderView() trait and render view from object variables
     * $this->args;
     * $this->template;
     * 
     */

    public function setDeleteRoute($routeAlias) {
        $this->deleteRoute = $routeAlias;
        return $this;
    }

    public function setEditRoute($routeAlias) {
        $this->editRoute = $routeAlias;
        return $this;
    }

    public function render($value, $row) {
        $this->createArgs($value, $row);
        return $this->renderView();
    }

}
