<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Element Transitions.
 *
 * @link 
 */
class FontAwesome extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        if ($this->version > 4) {
            $this->add('vendor/fontawesome-all.css');

            return;
        }

        $this->add('https://maxcdn.bootstrapcdn.com/font-awesome/'.$this->version().'/css/font-awesome.min.css');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        if ($this->version > 4) {
            $this->add('vendor/fontawesome-all.css');

            return;
        }

        $this->add('vendor/fontawesome-all.css');
    }
}
