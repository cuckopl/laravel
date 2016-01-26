<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Services\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Validator;
use App\User;

class AuthController extends Controller {

    protected $redirectTo = 'articles';

    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */

use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
     * @return void
     */
    public function __construct(Guard $auth, Registrar $registrar) {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data) {


        $registar = new Registrar($data);
        return $registar->create($data);
//        return User::create([
//                    'name' => $data['name'],
//                    'email' => $data['email'],
//                    'password' => bcrypt($data['password']),
//        ]);
    }

}
