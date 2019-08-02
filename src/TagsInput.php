<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * TagsInput.
 *
 * @link
 */
class TagsInput extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/'.$this->version().'/bootstrap-tagsinput.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/'.$this->version().'/bootstrap-tagsinput.css');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/tags-input.js');
        $this->add('vendor/tags-input.css');
    }
}
