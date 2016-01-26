<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Kodeine\Acl\Models\Eloquent\Role;
use Illuminate\Support\Facades\Request;
use Validator;

class AclRoleResources {

    protected $id;

    public function __construct($id = null) {
        $this->id = $id;
    }

    public static function factoryCreate($id = null) {
        return new self($id);
    }

    public function validateAndSave(Request $request) {
        $validator = $this->getValidators($request);
        $status = !$validator->fails();

        if ($status) {
            $this->store($request::all());
            $info = \App\Helpers\Notification::generateSucces('Saving role data was succesfull.');
        } else {
            $info = \App\Helpers\Notification::generateError($validator->errors()->all());
        }


        return response()->json(['status' => $status, 'info' => $info]);
    }

    protected function store($data) {
        $role = $this->storeRole($data);
        $this->syncPermissions($role, $data['roles']);
    }

    protected function syncPermissions(Role $role, $permissionIds) {
        $role->syncPermissions($permissionIds);
    }

    protected function storeRole($data) {
        if ($this->id == null) {
            $role = Role::create($data);
        } else {
            new Role();
            $role = Role::find($this->id);
            $role->update($data);
        }
        return $role;
    }

    protected function getValidators($request) {
        return Validator::make($request::all(), [
                    'name' => 'required|unique:roles,name,' . $this->id,
                    'slug' => 'required|unique:roles,slug,' . $this->id,
        ]);
    }

}
