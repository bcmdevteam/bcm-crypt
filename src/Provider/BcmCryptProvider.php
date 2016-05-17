<?php
namespace BcmDevTeam\BcmCrypt\Provider;

use BcmDevTeam\BcmCrypt\BcmCrypter;
use Illuminate\Support\ServiceProvider;

class BcmCryptProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['bcmcrypter'] = $this->app->share(function($app) {
            return new BcmCrypter;
        });
    }
}