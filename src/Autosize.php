<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Autosize.
 *
 * @link 
 */
class Autosize extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/autosize.js/'.$this->version().'/autosize.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/autosize.js');
    }
}
