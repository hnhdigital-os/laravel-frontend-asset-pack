<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Backbone Local Persist component.
 *
 * @link https://backbonejs.org/
 */
class BackboneLocalPersist extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdn.jsdelivr.net/npm/backbone.localpersist'.$this->version().'/Backbone.localPersist.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/backbone-local-persist.js');
    }
}
