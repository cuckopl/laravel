<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Role;

class AclRoleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view('admin.acl-role-controller.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $role = new Role();
        $permissions = \Kodeine\Acl\Models\Eloquent\Permission::lists('name', 'id');
        return view('admin.acl-role-controller.add-role', compact('role', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $aclRoleResource = \App\Model\AclRoleResources::factoryCreate();
        return $aclRoleResource->validateAndSave($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $role = Role::find($id);
        $permissions = \Kodeine\Acl\Models\Eloquent\Permission::lists('name', 'id');
        return view('admin.acl-role-controller.edit-role', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $aclRoleResource = \App\Model\AclRoleResources::factoryCreate($id);
        return $aclRoleResource->validateAndSave($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        if (Role::destroy($id)) {
            $info = \App\Helpers\Notification::generateSucces('Role deleted successfully');
        } else {
            $info = \App\Helpers\Notification::generateError('Some error occured when deleting role');
        }
        return response()->json(['status' => true, 'info' => $info]);
    }

}
