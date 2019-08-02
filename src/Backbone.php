<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Backbone library.
 *
 * @link https://backbonejs.org/
 */
class Backbone
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->('https://cdnjs.cloudflare.com/ajax/libs/backbone.js/'.$this->version().'/backbone-min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/backbone.js');
    }
}
