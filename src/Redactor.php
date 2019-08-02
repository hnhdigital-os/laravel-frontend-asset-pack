<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Redactor.
 *
 * @link
 */
class Redactor extends PackageAbstract
{
    /**
     * Available plugins.
     *
     * @var array
     */
    private static $plugins = [
        'alignment',
        'clips',
        'codemirror',
        'counter',
        'filemanager',
        'fontcolor',
        'fontfamily',
        'fontsize',
        'fullscreen',
        'imagemanager',
        'inlinestyle',
        'limiter',
        'properties',
        'source',
        'table',
        'textdirection',
        'textexpander',
        'video',
    ];

    /**
     * Loaded plugins.
     *
     * @var array
     */
    private static $loaded_plugins = [];

    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->add('vendor/redactor.js');
        $this->add('vendor/redactor.css');
    }

    /**
     * Buttons.
     *
     * @param string $element
     * @param array  $buttons
     *
     * @return string
     */
    public static function buttons($element, $buttons)
    {
        static::$loaded_plugins = [];

        foreach ($buttons as $name) {
            static::loadPlugin($name);
        }

        $html = sprintf("<script>$('%s').data('toolbar-buttons', %s);</script>", $element, json_encode($buttons));

        if (count($buttons)) {
            $html .= sprintf("<script>$('%s').data('toolbar-plugins', %s);</script>", $element, json_encode($plugins));
        }

        return $html;
    }

    /**
     * Load plugins.
     *
     * @param string $plugin
     * @param array  &$plugins
     *
     * @return void
     */
    public static function loadPlugin($plugin, &$plugins)
    {
        if (!in_array($plugin, self::$plugins)) {
            return;
        }

        static::$loaded_plugins[] = $plugin;

        $this->add('vendor/redactor/'.$plugin.'.js');

        if ($plugin === 'alignment' || $plugin === 'clips') {
            $this->add('vendor/redactor/'.$plugin.'.css');
        }
    }
}
