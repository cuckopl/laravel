<?php

namespace App\DataTables\Columns;

Class ActionAclRoleColumn extends \App\DataTables\Base\BaseColumn {

    public function createArgs($value, $row) {
        $this->setTemplate('admin.data-tables.acl-role-action');
        $this->addViewVariables(array('value' => $value,
            'routeEdit' => route('editAclRole', $row->id),
            'routeDestroy' => route('destroyAclRole', $row->id),
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
