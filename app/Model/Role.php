<?php

namespace App\Model;

class Role extends \Kodeine\Acl\Models\Eloquent\Role {

    public function getRolePermissions() {
        $permissions = $this->permissions;
        $result = array();
        foreach ($permissions as $permission) {
            $result[] = $permission->id;
        }
        return $result;
    }

}
