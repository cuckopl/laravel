<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class ViewComposerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        View::composer('leyouts.admin-1.admin_leyout', function($view) {
            $view->with('installedModules', 
                    \App\Model\DynamicRoutes::getDynamicRouts());
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
