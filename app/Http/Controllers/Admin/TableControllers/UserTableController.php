<?php

namespace App\Http\Controllers\Admin\TableControllers;

use App\Http\Controllers\Controller;
use App\Model\User;
use \yajra\Datatables\Request as DataTableRequest;

class UserTableController extends Controller {

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getUsersData() {
        $dataTable = new \App\DataTables\DataTable(User::select('*'), DataTableRequest::capture());
        $dataTable->addColumn('action', new \App\DataTables\Columns\UserActionColumn());
        return $dataTable->make(true);
    }

}
