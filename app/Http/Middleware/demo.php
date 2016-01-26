<?php

namespace App\Http\Middleware;

use Closure;

class demo {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
//        dd($request->is('auth/login'));

//        if ($request->user()->isManager()) {
//            return redirect('articles');
//        }
        return $next($request);
    }

}
