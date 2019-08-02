<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Ladda.
 *
 * @link 
 */
class Ladda extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->package('Jquery');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/Ladda/'.$this->version().'/spin.min.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/Ladda/'.$this->version().'/ladda.min.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/Ladda/'.$this->version().'/ladda.jquery.min.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/Ladda/'.$this->version().'/ladda-themeless.min.css');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/bootstrap.js');
        $this->add('vendor/spin.min.js');
        $this->add('vendor/ladda.min.js');
        $this->add('vendor/ladda.jquery.min.js');
        $this->add('vendor/ladda-themeless.min.css');
    }
}
