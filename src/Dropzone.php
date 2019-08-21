<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;
use Html;

/**
 * Dropzone.
 *
 * @link
 */
class Dropzone extends PackageAbstract
{
    /**
     * Defualts for Dropzone.
     *
     * @var array
     */
    public static $default_options = [
        'dictDefaultMessage'     => '',
        'dictDefaultMessageHint' => '<u>Drop</u> files here or <u>click</u> to browse.',
        'maxFilesize'            => 0,
    ];

    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->default['maxFilesize'] = Html::getFileUploadMaxSize();
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/dropzone/'.$this->version().'/min/dropzone.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->cdn();
    }

    /**
     * Load inline scripts.
     *
     * @return void
     */
    public function inline()
    {
        $this->content('js', 'if (typeof Dropzone != \'undefined\') { Dropzone.autoDiscover = false; }', 'ready');
    }

    /**
     * Options for Dropzone.
     *
     * @param array $options
     *
     * @return string
     */
    public static function options($options = [])
    {
        $options = array_merge(self::$default_options, $options);

        if (!empty($options['dictDefaultMessageHint'])) {
            if (!empty($options['dictDefaultMessage'])) {
                $options['dictDefaultMessage'] .= '<br>';
                $options['dictDefaultMessageHint'] = str_replace(['Drop', 'click'], ['dropping', 'clicking'], $options['dictDefaultMessageHint']);
            }

            $options['dictDefaultMessage'] .= $options['dictDefaultMessageHint'];
        }

        return htmlspecialchars(json_encode($options));
    }
}
