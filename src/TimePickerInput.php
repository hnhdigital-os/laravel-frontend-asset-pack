<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * TimePickerInput.
 *
 * @link 
 */
class TimePickerInput extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdn.jsdelivr.net/jquery.timepicker/'.$this->version().'/jquery.timepicker.css');
        $this->add('https://cdn.jsdelivr.net/jquery.timepicker/'.$this->version().'/jquery.timepicker.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/timepicker.css');
        $this->add('vendor/timepicker.js');
    }
}
