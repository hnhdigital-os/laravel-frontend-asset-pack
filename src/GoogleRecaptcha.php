<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Google Recaptcha.
 *
 * @link 
 */
class GoogleRecaptcha extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        if (empty($this->version()) && !empty(config('hnhdigital.google.recaptcha.key'))) {
            $this->setVersion(config('hnhdigital.google.recaptcha.key'));
        }

        if (empty($this->version())) {
            return;
        }

        $this->add('https://maps.google.com/maps/api/js?libraries=places&key='.$this->version(), 'footer', [
            'async' => 'async',
            'defer' => 'defer',
        ]);

        $this->meta('g-recaptcha-sitekey', [
            'content' => $this->version()
        ]);
    }
}
