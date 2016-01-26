<?php

namespace App\DataTables\Columns;

Class ActionAclPermission extends \App\DataTables\Base\BaseColumn {

    public function createArgs($value, $row) {
        $this->setTemplate('admin.data-tables.acl-permission-action');
        $this->addViewVariables(array('value' => $value,
            'routeEdit' => route('editAclPremission', $row->id),
            'routeDestroy' => route('destroyAclPremission', $row->id),
        ));
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
