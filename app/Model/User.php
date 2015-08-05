<?php

namespace App\Model;

use Kodeine\Acl\Traits\HasRole;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/*
 *  schould add interface RoutingAcl for method  canContinue
 */

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable,
        CanResetPassword,
        HasRole;

    protected $table = 'users';
    protected $fillable = array(
        'email', 'name'
    );

    public function getUserRole() {
        $role = $this->roles()->first();
        if (empty($role)) {
            return;
        }
        return $role->id;
    }

    public function getUserPermissions() {
        $permissions = $this->permissions;
        $result = array();
        foreach ($permissions as $permission) {
            $result[] = $permission->id;
        }
        return $result;
    }

    public function canContinue($actionName) {

        if ($this->can('url.route')) {
            return true;
        }
        if ($this->can('route.' . $actionName)) {
            return true;
        }

        return false;
    }

    public function articles() {
        return $this->hasMany('App\Article');
    }

    /*
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function comments() {
        return $this->hasMany('App\ArticleComments');
    }

    public function multimedia() {
        return $this->hasMany('App\Multimedia');
    }

    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     * 
     * This method is same that method @comments but we use Throught to get user articles comments
     */
    public function commentsThrougt() {
        return $this->hasManyThrough('App\ArticleComments', 'App\Article', 'user_id', 'article_id');
        // do obczajać to w wolnej chwili
    }

    public function isManager() {
        return false;
    }

}
