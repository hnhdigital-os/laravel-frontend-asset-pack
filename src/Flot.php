<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Bootstrap.
 *
 * @link
 */
class Flot extends PackageAbstract
{
    /**
     * Load after depdendencies.
     *
     * @return void
     */
    public function after()
    {
        $this->package('FlotTooltip');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/flot/'.$this->version().'/jquery.flot.min.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/flot/'.$this->version().'/jquery.flot.resize.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/jquery.flot.js');
        $this->add('vendor/jquery.flot.resize.js');
    }
}
