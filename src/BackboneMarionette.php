<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Backbone Marionettecomponent.
 *
 * @link https://backbonejs.org/
 */
class BackboneMarionette extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdn.jsdelivr.net/npm/backbone.localpersist'.$this->version().'/Backbone.marionette.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/backbone-marionette.js');
    }
}
