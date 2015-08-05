<?php

namespace App\Http\Controllers\Admin\TableControllers;

use App\Http\Controllers\Controller;
use Kodeine\Acl\Models\Eloquent\Permission;
use \yajra\Datatables\Request as DataTableRequest;

class PermissionTableController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getPermissionTable() {
        \App\Model\Resources\PermissionResources::getAvailbeRoutes();
        new Permission();
        $dataTable = new \App\DataTables\DataTable(Permission::select('*'), DataTableRequest::capture());
        $dataTable->addColumn('action', new \App\DataTables\Columns\ActionAclPermission());
        $dataTable->editColumn('slug', function ($value, $row) {
            $html = '';
            foreach ($value['slug'] as $name => $acces) {
                $html.=$name . '' . $acces . '</br>';
                
            }
            return $html;
        });
        return $dataTable->make(true);
    }

}
