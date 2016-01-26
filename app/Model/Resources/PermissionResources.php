<?php

namespace App\Model\Resources;

use Route;
use Validator;
use App\Model\AclRoutingPermission;
class PermissionResources extends \App\Model\BaseResource {

    protected function getValidators($request) {
        return Validator::make($request->all(), [
                    'name' => 'required|unique:roles,name,' . $this->id,
        ]);
    }

    public static function factoryCreate($id = null) {
        return new self($id);
    }

    /*
     * returns $array with all available routs
     */

    public static function getAvailbeRoutes() {
        $routs = Route::getRoutes();
        $actions = array();
        foreach ($routs as $rout => $val) {
            $actions[strtolower($val->getActionName())] = strtolower($val->getActionName());
        }
        return $actions;
    }

    protected function store($data) {
        if ($this->id == null) {
            $this->model->create([
                'name' => strtolower($data['name']),
                'slug' => [
                    AclRoutingPermission::ROUTE_RULE => (bool) $data['slug'],
                ],
                'description' => $data['description']
            ]);
        } else {
            $model = $this->model->find($this->id);
            // we dont update name 
            $model->slug = array(AclRoutingPermission::ROUTE_RULE => (bool) $data['slug']);
            $model->update();
        }
    }

    public static function refreshRoutes() {
        $actions = \App\Model\Resources\PermissionResources::getAvailbeRoutes();
        foreach ($actions as $action) {
            if (AclRoutingPermission::where('name', '=', $action)->count() == 0) {
                AclRoutingPermission::create([
                    'name' => strtolower($action),
                    'slug' => [
                        AclRoutingPermission::ROUTE_RULE => true,
                    ],
                    'description' => 'Auto Created'
                ]);
            }
        }
    }

}
