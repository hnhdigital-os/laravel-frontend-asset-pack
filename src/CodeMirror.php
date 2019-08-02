<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Bootstrap.
 *
 * @link
 */
class CodeMirror extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/codemirror/'.$this->version().'/codemirror.min.css');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/codemirror/'.$this->version().'/codemirror.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/codemirror.js');
        $this->add('vendor/codemirror.css');
    }
}
