<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * SquireRte.
 *
 * @link
 */
class SquireRte extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/popper.js/'.$this->version().'/umd/popper.min.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/squire-rte/'.$this->version().'/squire.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/squire.js');
    }
}
