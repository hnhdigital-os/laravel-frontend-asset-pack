<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Select2.
 *
 * @link
 */
class Select2 extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/select2/'.$this->version().'/css/select2.min.css');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/select2/'.$this->version().'/js/select2.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/select2.min.css');
        $this->add('vendor/select2.min.js');
    }
}
