<?php

namespace Kevin50406418\Ecpayinvoice;

use Illuminate\Support\ServiceProvider;

class EcpayinvoiceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Config/ecpay.php' => config_path('ecpay.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('ecpayinvoice', function ($app){
            return new Ecpayinvoice;
        });
    }
}