<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use App\ArticleComments;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

    use Authenticatable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /*
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

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
