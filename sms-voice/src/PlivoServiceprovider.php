<?php
/**
 * Created by PhpStorm.
 * User: GLB-116
 * Date: 4/24/2018
 * Time: 5:39 PM
 */

namespace Plivo\Smsvoice;


use Illuminate\Support\ServiceProvider;

class PlivoServiceprovider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes/web.php';
        $this->app->make('Plivo\Smsvoice\PlivoController');
    }

}