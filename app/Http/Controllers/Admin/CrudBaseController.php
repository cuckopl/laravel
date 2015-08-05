<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Resources\ModuleResources;
use \yajra\Datatables\Request as DataTableRequest;

/**
 * Description of CrudBaseController
 *
 * @author Pawel
 */
abstract class CrudBaseController extends Controller {
    /*
     * @var \Illuminate\Database\Eloquent\Model $model
     */

    protected $model;

    /*
     * Set clss rotected variable model. 
     * Model will be used in crud actions
     */

    abstract protected function getModel();

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view($this->controllerView . '.index');
    }

    public function create() {
        $permission = new Permission();
        $actions = \App\Model\Resources\PermissionResources::getAvailbeRoutes();
        return view('admin.permission-controller.add', compact('permission', 'actions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $aclRoleResource = \App\Model\Resources\PermissionResources::factoryCreate();
        return $aclRoleResource->validateAndSave($request, new Permission());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function createPerrmisionRoutes() {
        \App\Model\Resources\PermissionResources::refreshRoutes();
        $info = \App\Helpers\Notification::generateSucces('Permission Routes Refreshed Successfully');
        return response()->json(['status' => true, 'info' => $info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $permission = Permission::find($id);
        $actions = \App\Model\Resources\PermissionResources::getAvailbeRoutes();
        return view('admin.permission-controller.edit', compact('permission', 'actions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $permissionResource = \App\Model\Resources\PermissionResources::factoryCreate($id);
        return $permissionResource->validateAndSave($request, Permission::findOrFail($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        if (Permission::destroy($id)) {
            $info = \App\Helpers\Notification::generateSucces('Permission deleted successfully');
        } else {
            $info = \App\Helpers\Notification::generateError('Some error occured when deleting permission');
        }
        return response()->json(['status' => true, 'info' => $info]);
    }

    public function dataTable() {
        $dataTable = new \App\DataTables\DataTable($this->getModel()->select('*'), DataTableRequest::capture());
        $dataTable->addColumn('action','ImplementCruddActions');
        return $dataTable->make(true);
    }

}
