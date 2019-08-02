<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * jQuery library.
 *
 * @link https://jquery.com/
 */
class Jquery extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->addFirst('https://cdnjs.cloudflare.com/ajax/libs/jquery/'.$this->version().'/jquery.min.js', 'header', [
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
        $this->add('vendor/jquery.js', 'header');
    }
}
