<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

    use DispatchesCommands,
        ValidatesRequests;

    protected function isSignIn() {
        $isAutheticated = false;
        if (\Auth::user() == null) {
            return $isAutheticated;
        }
        $isAutheticated = true;

        return $isAutheticated;
    }

}
