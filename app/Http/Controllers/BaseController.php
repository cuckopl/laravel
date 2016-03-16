<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Subservices\LeadCounterModel;
use Auth;

class BaseController extends Controller
{


    protected $data;

    /**
     * @return bool
     */
    protected function checkUserIsActivate()
    {
        $isActivate = false;
        if (Auth::check()){
            $isActivate = LeadCounterModel::factory()->isUserActive(Auth::user());
        }

        return $isActivate;
    }

}
