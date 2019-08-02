<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Toastr.
 *
 * @link 
 */
class Toastr extends PackageAbstract
{
    /**
     * Default config.
     *
     * @var array
     */
    private static $default_config = [
        'closeButton'       => true,
        'debug'             => false,
        'progressBar'       => true,
        'preventDuplicates' => true,
        'positionClass'     => 'toast-top-right',
        'onclick'           => null,
        'showDuration'      => '400',
        'hideDuration'      => '1000',
        'timeOut'           => '7000',
        'extendedTimeOut'   => '1000',
        'showEasing'        => 'swing',
        'hideEasing'        => 'linear',
        'showMethod'        => 'fadeIn',
        'hideMethod'        => 'fadeOut',
    ];

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$this->version().'/toastr.min.css');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/'.$this->version().'/toastr.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/toastr.css');
        $this->add('vendor/toastr.js');
    }

    /**
     * Toastr config.
     *
     * @return array
     */
    public function config($customizations = [])
    {
        return htmlentities(json_encode(array_merge(self::$default_config, $customizations)));
    }
}
