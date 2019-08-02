<?php

namespace HnhDigital\LaravelFrontendAssetPack;

/**
 * MiniColors.
 *
 * @link
 */
class MiniColors
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->package('Jquery');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/'.$this->version().'/jquery.minicolors.min.css');
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jquery-minicolors/'.$this->version().'/jquery.minicolors.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/jquery.minicolors.js');
        $this->add('vendor/jquery.minicolors.css');
    }
}
