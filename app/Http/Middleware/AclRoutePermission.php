<?php

namespace App\Http\Middleware;

use Route;
use Closure;
use App\Model\User;

/**
 * Description of AclRoutePermission
 *
 * @author Pawel
 */
class AclRoutePermission extends \Kodeine\Acl\Middleware\HasPermission {

    public function handle($request, Closure $next) {
        $this->request = $request;
        $this->crudConfigOverride();
        $user = $request->user();



        if ($this->canContinue($user)) {
            return $next($request);
        }
        if ($request->ajax()) {
            $info = \App\Helpers\Notification::generateError('Not enough privilages to make this operation');
            return response()->json(['status' => true, 'info' => $info]);
        }

        return abort(401, 'You are not authorized to access this resource.');
    }

    public function getUser() {
        
    }

    protected function canContinue($user) {
        if (!$user instanceof \Illuminate\Database\Eloquent\Model) {
            $defaultUser = config('acl.defaultUser');
            $user = User::where('name', '=', $defaultUser)->firstOrFail();
        }
        if ($user->canContinue(Route::getCurrentRoute()->getActionName())) {
            return true;
        }

        return false;
    }

}
