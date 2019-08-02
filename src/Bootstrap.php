<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Bootstrap.
 *
 * @link https://getbootstrap.com/
 */
class Bootstrap extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->package('Jquery');
        $this->package('Popper');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://maxcdn.bootstrapcdn.com/bootstrap/'.$this->version().'/js/bootstrap.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/bootstrap.js');
    }
}
