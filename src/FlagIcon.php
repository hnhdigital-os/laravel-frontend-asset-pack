<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * FlagIcon.
 *
 * @link https://getbootstrap.com/
 */
class FlagIcon extends PackageAbstract
{
    /**
     * Show the given glag.
     *
     * @param string $country_code
     * @param boolean $version
     *
     * @return string
     */
    public static function svg($country_code, $version = false)
    {
        $url = 'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/';
        $urt .= $this->lookupVersion($version).'/flags/1x1/'.strtolower($country_code).'.svg';

        return $url;
    }
}
