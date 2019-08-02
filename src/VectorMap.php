<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * VectorMap.
 *
 * @link
 */
class VectorMap extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->add('vendor/jquery.jvectormap.css');
        $this->add('vendor/jquery.jvectormap.min.js');
        $this->add('vendor/jquery.jvectormap-world-mill-en.js');
    }
}
