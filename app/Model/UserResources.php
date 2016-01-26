<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use App\Model\User;
use Validator;

class UserResources {
    /*
     * Validate user form get request and id 
     * 
     */

    const ROLE_FIELD = 'roles';
    const GROUP_FIELD = 'group';

    public function validateUserForm(Request $request, $id = null) {
        $validator = Validator::make($request::all(), [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,' . $id,
        ]);

        if ($status = !$validator->fails()) {
            $this->store($request::all(), $id);
            $info = \App\Helpers\Notification::generateSucces('Saving User Data was succesfull');
        } else {
            $info = \App\Helpers\Notification::generateError($validator->errors()->all());
        }


        return response()->json(['status' => $status, 'info' => $info]);
    }

    protected function store($data, $id = null) {
        $user = $this->storeUser($id, $data);
        $this->storeRoles($user, isset($data[self::ROLE_FIELD]) ? $data[self::ROLE_FIELD] : null);
        $this->storeGroups($user, $data[self::GROUP_FIELD]);
    }

    private function storeUser($id, $data) {
        if ($id == null) {
            $user = user::create($data);
        } else {
            $user = User::find($id);
            $user->update($data);
        }

        return $user;
    }

    private function storeRoles(User $user, $permissionsId) {
        if (empty($permissionsId)) {
            return $user->revokeAllPermissions();
        }
        return $user->syncPermissions($permissionsId);
    }

    private function storeGroups(User $user, $assignRole) {
        $user->revokeAllRoles();
        return $user->assignRole($assignRole);
    }

}
