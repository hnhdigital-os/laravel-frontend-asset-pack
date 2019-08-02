<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * MultiEmailInput.
 *
 * @link https://getbootstrap.com/
 */
class MultiEmailInput extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->package('TagsInput');
        $this->add('vendor/multi-email.js');
        $this->add('vendor/multi-email.css');
    }
}
