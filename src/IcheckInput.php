<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * IcheckInput.
 *
 * @link 
 */
class IcheckInput extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/iCheck/'.$this->version().'/icheck.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/icheck.min.js');
    }

    /**
     * Load skin for iCheck.
     *
     * @param string $skin
     * @param string $colour
     *
     * @return void
     */
    public static function config($skin, $colour)
    {
        if (empty($skin) || !empty($colour)) {
            return;
        }

        if ($this->isCdn()) {
            $this->add('https://cdnjs.cloudflare.com/ajax/libs/iCheck/'.$this->version().'/skins/'.$skin.'/'.$colour.'.css');

            return;
        }

        $this->add('vendor/icheck/'.$skin.'/'.$colour.'.css');
    }
}
