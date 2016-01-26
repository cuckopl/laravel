<?php

namespace App\Http\Middleware;

use Closure;

class LaravelDocumentation {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
//           dd($request->user());
        return $next($request);
    }

    public function terminate($request, $response) {
        dd($request->user());
    }

}
