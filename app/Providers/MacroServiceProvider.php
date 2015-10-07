<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MacroServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //require base_path() . '/resources/macros/*.macros.php';
        foreach(glob(base_path('resources/macros/*.macros.php')) as $filename){
            require_once($filename);
        }
        // etc...
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}