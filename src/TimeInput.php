<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * TimeInput.
 *
 * @link
 */
class TimeInput extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->add('vendor/timepicker.css');
        $this->add('vendor/timepicker.js');
    }
}
