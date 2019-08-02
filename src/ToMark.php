<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * ToMark.
 *
 * @link 
 */
class ToMark extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://uicdn.toast.com/to-mark/v'.$this->version().'/to-mark.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/to-mark.js');
    }
}
