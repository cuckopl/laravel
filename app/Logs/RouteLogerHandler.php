<?php

namespace App\Logs;

use Illuminate\Support\Facades\Route;

/**
 * Description of RouteLoger
 *
 * @author Pawel
 */
class RouteLogerHandler {

    const GUEST = 0;

    public function handle($data) {
        $activitLog = new \App\Model\UserActivitis();

        $activitLog->allowed = $data['user']->canContinue(Route::getCurrentRoute()->getActionName());
        $activitLog->user_id = $data['user']->id;
        $activitLog->activity = Route::getCurrentRoute()->getActionName();
        $activitLog->save();
    }

    public function canHandle($data) {
        $canHandle = array();
        if (!isset($data['request']) || !$data['request'] instanceof \Illuminate\Http\Request) {
            $canHandle[] = false;
        }
        if (!isset($data['user']) || !$data['user'] instanceof \App\Model\User) {
            $canHandle [] = false;
        }

        if (empty($canHandle)) {
            return true;
        }
        return false;
    }

    protected function checkUserAllowed($user, $permission) {
        return $user->canContinue($permission);
    }

}
