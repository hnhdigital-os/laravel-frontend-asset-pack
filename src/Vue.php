<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Vue library.
 *
 * @link https://vuejs.org
 */
class Vue extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->addFirst('https://cdn.jsdelivr.net/npm/vue@'.$this->version().'/dist/vue.min.js', 'header', [
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
        $this->add('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', 'header');
    }
}
