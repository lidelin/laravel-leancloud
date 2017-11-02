<?php

namespace LDL\LeanCloud\Provider;

use Illuminate\Support\ServiceProvider;
use LeanCloud\Client;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(realpath(__DIR__ . '/../../config/leancloud.php'), 'leancloud');
        $this->publishes([
            realpath(__DIR__ . '/../../config/leancloud.php') => config_path('leancloud.php'),
        ], 'config');

        Client::initialize(
            config('leancloud.app_id'),
            config('leancloud.app_key'),
            config('leancloud.master_key')
        );
        Client::useMasterKey(true);
        Client::useProduction(config('leancloud.env') == 'production');

        if (!getenv("LEANCLOUD_API_SERVER")) {
            putenv("LEANCLOUD_API_SERVER=" . config('leancloud.api_server'));
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
