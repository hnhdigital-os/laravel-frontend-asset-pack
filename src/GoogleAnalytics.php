<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Google Analytics.
 *
 * @link https://jqueryui.com/
 */
class GoogleAnalytics extends PackageAbstract
{
    /**
     * Load after depdendencies.
     *
     * @return void
     */
    public function before()
    {
        if (empty($this->version()) && !empty(config('hnhdigital.google.analytics.key'))) {
            $this->setVersion(config('hnhdigital.google.analytics.key'));
        }

        if (empty($this->version())) {
            return;
        }

        $this->add('https://www.googletagmanager.com/gtag/js?id='.$this->version(), null, [
            'async' => 'async',
        ]);

        $script = "window.dataLayer = window.dataLayer || [];\n";
        $script .= "function gtag(){dataLayer.push(arguments);}\n";
        $script .= "gtag('js', new Date());\n";
        $script .= sprintf("gtag('config', '%s');", $this->version());
        $this->content('js', $script, 'header-inline');
    }
}
