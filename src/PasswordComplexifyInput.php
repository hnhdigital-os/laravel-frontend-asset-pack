<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * PasswordComplexifyInput.
 *
 * @link https://getbootstrap.com/
 */
class PasswordComplexifyInput extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jquery.complexify.js/'.$this->version().'/jquery.complexify.min.js');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jquery.complexify.js/'.$this->version().'/jquery.complexify.banlist.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/complexify.js');
        $this->add('vendor/complexify.banlist.js');
    }

    /**
     * Load after.
     *
     * @return void
     */
    public function after()
    {
        $this->add('vendor/complexify.css');
    }
}
