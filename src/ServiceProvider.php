<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Service provider for this asset pack.
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.packages.php', 'hnhdigital.assets.packages');
    }
}
