<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Translations.
 *
 * @link 
 */
class Translations
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->add('vendor/translation.js');
        $this->add('js/translations.js');
    }
}
