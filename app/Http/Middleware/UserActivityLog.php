<?php

namespace App\Http\Middleware;

use Closure;

class UserActivityLog {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $logManager = new \App\Logs\LogManager\LogManager();
        $logManager->handle(array('user'=>$request->user(),'request' => $request));
        return $next($request);
    }

}
