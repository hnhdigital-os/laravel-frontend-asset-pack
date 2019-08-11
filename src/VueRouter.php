<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * VueRouter library.
 *
 * @link https://vuejs.org
 */
class VueRouter extends PackageAbstract
{
    /**
    * Load before.
    *
    * @return void
    */
    public function before()
    {
        $this->package('Vue');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->addFirst('https://cdn.jsdelivr.net/npm/vue-router@'.$this->version().'/dist/vue-router.min.js', 'header', [
            'crossorigin' => 'anonymous',
            'integrity'   => $this->integrity(),
        ]);
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->cdn();
    }
}
