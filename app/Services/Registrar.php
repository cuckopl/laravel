<?php

namespace App\Services;

use App\Model\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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

        $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
        ]);
        $this->addDefaultRole($user);

        return $user;
    }

    protected function addDefaultRole(User $user) {
        $defaultRole = config('acl.defaultRoleAfterRegister');
        if ($defaultRole) {
            return $user->assignRole($defaultRole);
        }
        throw new \App\Exceptions\InvalidConfigArgumentException('Acl config: Youd dont add default role for users that registerd.');
    }

}
