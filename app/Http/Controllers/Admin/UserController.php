<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;
use App\Model\User;
use Illuminate\Http\Response;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function listUsers() {
        return view('admin.user-controller.list-users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function store(Request $request) {
        $userResource = new \App\Model\UserResources();
        return $userResource->validateUserForm($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function add() {
        $user = new User();
        $permissions = \Kodeine\Acl\Models\Eloquent\Permission::lists('name', 'id');
        $groups = \Kodeine\Acl\Models\Eloquent\Role::lists('name', 'id');
        return view('admin.user-controller.add', compact('user', 'permissions', 'groups'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function get($id) {
        $user = User::find($id);
        $permissions = \Kodeine\Acl\Models\Eloquent\Permission::lists('name', 'id');
        $groups = \Kodeine\Acl\Models\Eloquent\Role::lists('name', 'id');
        return view('admin.user-controller.edit', compact('user', 'permissions', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $userResource = new \App\Model\UserResources();
        return $userResource->validateUserForm($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        if (User::destroy($id)) {
            $info = \App\Helpers\Notification::generateSucces('User deleted successfully');
        } else {
            $info = \App\Helpers\Notification::generateError('Some error occured when deleting user');
        }
        return response()->json(['status' => true, 'info' => $info]);
    }

}
