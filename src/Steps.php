<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Steps.
 *
 * @link
 */
class Steps extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->package('Jquery');
        $this->package('ValidateInput');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/'.$this->version().'/jquery.steps.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/steps.min.js');
    }

    /**
     * Load after.
     *
     * @return void
     */
    public function after()
    {
        $this->add('vendor/steps.css');
    }
}
