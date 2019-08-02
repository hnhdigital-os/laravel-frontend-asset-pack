<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * ValidateInput.
 *
 * @link 
 */
class ValidateInput extends PackageAbstract
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
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/'.$this->version().'/jquery.validate.min.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/'.$this->version().'/additional-methods.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/popper.js');
        $this->add('vendor/validate.min.js');
        $this->add('vendor/validate-additional.min.js');
    }
}
