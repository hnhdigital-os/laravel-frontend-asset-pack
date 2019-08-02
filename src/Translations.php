<?php

namespace HnhDigital\LaravelFrontendAssetPack;

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
