<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Slick.
 *
 * @link 
 */
class Slick extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdn.jsdelivr.net/gh/kenwheeler/slick@'.$this->version().'/slick/slick.css');
        $this->add('https://cdn.jsdelivr.net/gh/kenwheeler/slick@'.$this->version().'/slick/slick-theme.css');
        $this->add('https://cdn.jsdelivr.net/gh/kenwheeler/slick@'.$this->version().'/slick/slick.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/slick/slick.css');
        $this->add('vendor/slick/slick-theme.css');
        $this->add('vendor/slick/slick.js');
    }
}
