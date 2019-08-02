<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Highlight.
 *
 * @link
 */
class Highlight extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://maxcdn.bootstrapcdn.com/bootstrap/'.$this->version().'/highlight.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/highlight.js');
    }

    /**
     * Load a languages.
     *
     * @param array $config
     *
     * @return void
     */
    public function config($config)
    {
        foreach (Arr::get($config, 'languages', []) as $language) {
            $this->addLanguage($language);
        }

        foreach (Arr::get($config, 'styles', []) as $style) {
            $this->addStyle($style);
        }
    }

    /**
     * Load a specific style.
     *
     * @param string $style
     *
     * @return void
     */
    private function addStyle($style)
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/'.$this->version().'/languages/'.$language.'.min.css');
    }

    /**
     * Load a specific style.
     *
     * @param string $style
     *
     * @return void
     */
    private function addLanguage($style)
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/'.$this->version().'/styles/'.$style.'.min.css');
    }
}
