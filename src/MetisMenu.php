<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * MetisMenu.
 *
 * @link
 */
class MetisMenu extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->package('Jquery');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/metisMenu/'.$this->version().'/metisMenu.min.css');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/metisMenu/'.$this->version().'/metisMenu.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/metis-menu.min.js');
        $this->add('vendor/metis-menu.min.css');
    }
}
