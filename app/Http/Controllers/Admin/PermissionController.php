<?php

namespace App\Http\Controllers\Admin;

use App\Model\AclRoutingPermission as Permission;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view('admin.permission-controller.index');
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

}
