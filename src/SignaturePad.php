<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * SignaturePad.
 *
 * @link 
 */
class SignaturePad extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdn.jsdelivr.net/npm/signature_pad@'.$this->version().'/dist/signature_pad.umd.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/signature_pad.umd.js');
    }
}
