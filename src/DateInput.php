<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * DateInput.
 *
 * @link
 */
class DateInput extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/'.$this->version().'/js/bootstrap-datepicker.min.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/'.$this->version().'/css/bootstrap-datepicker.css');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/datepicker.min.js');
        $this->add('vendor/datepicker.css');
    }
}
