<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        View::composer(array('app', 'dashboard'), function($view) {
            $view->with('count', User::count());
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
