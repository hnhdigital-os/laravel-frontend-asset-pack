<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use Arr;
use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * Google Maps.
 *
 * @link
 */
class GoogleMaps extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->add('https://maps.google.com/maps/api/js?libraries=places&key='.config('hnhdigital.google.maps.key'));
    }

    /**
     * Load requested extensions.
     *
     * @param string|array $extensions
     *
     * @return void
     */
    private static function loadExtensions($extensions)
    {
        $extensions = Arr::wrap($extensions);

        foreach ($extensions as $extension) {
            $extension = 'ext'.$extension;

            if (method_exists($this, $extension)) {
                $this->$extension();
            }
        }
    }

    /**
     * Marker Clusterer.
     *
     * @return void
     */
    private static function extMarkerClusterer()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/js-marker-clusterer/'.$this->info('plugins.MarkerClusterer', '1.0.0').'/markerclusterer_compiled.js');
    }
}
