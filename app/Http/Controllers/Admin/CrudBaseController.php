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
    protected $viewPath;

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
        $actions = \App\Model\Resources\PermissionResources::getAvailbeRoutes();
        return view($this->controllerView . '/add', ['model' => $this->model, 'actions' => $actions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $aclRoleResource = new \App\Model\Resources\SimpleResource();
        return $aclRoleResource->validateAndSave($request, $this->getModel());
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
        return view($this->controllerView . '/edit', compact('permission', 'actions'));
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
        $dataTable->addColumn('action', $this->getTableActions());
        return $dataTable->make(true);
    }

    abstract protected function getTableActions();
}
