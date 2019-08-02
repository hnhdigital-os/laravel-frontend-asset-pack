<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * jQueryUI library.
 *
 * @link https://jqueryui.com/
 */
class JqueryUi extends PackageAbstract
{
    /**
     * Version.
     *
     * @var string
     */
    protected $theme;

    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->theme = $this->info('theme');

        $this->package('Jquery');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/'.$this->version().'/jquery-ui.min.js', 'header', [
            'crossorigin' => 'anonymous',
            'integrity'   => $this->integrity('jquery-ui.min.js'),
        ]);

        $this->add('https://cdnjs.cloudflare.com/ajax/libs/jqueryui/'.$this->version().'/themes/'.$this->theme.'/jquery-ui.min.css', null, [
            'crossorigin' => 'anonymous',
            'integrity'   => $this->integrity($this->theme.'-jquery-ui.min.css'),
        ]);
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/jquery-ui.js', 'header');
        $this->add('vendor/jquery-ui/themes/'.$this->theme.'/jquery-ui.min.css');
    }
}
