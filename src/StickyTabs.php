<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * jQueryUI library.
 *
 * @link https://jqueryui.com/
 */
class StickyTabs extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        FrontendAsset::add('vendor/sticky-tabs.js');
    }
}
