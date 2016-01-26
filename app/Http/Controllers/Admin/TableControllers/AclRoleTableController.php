<?php

namespace App\Http\Controllers\Admin\TableControllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Kodeine\Acl\Models\Eloquent\Role;
use \yajra\Datatables\Request as DataTableRequest;

class AclRoleTableController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getRoleTable() {
        $dataTable = new \App\DataTables\DataTable(Role::select('*'), DataTableRequest::capture());
        $dataTable->addColumn('action', new \App\DataTables\Columns\ActionAclRoleColumn());
     
        return $dataTable->make(true);
    }

}
