<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * VideoJs.
 *
 * @link 
 */
class VideoJs extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->add('http://vjs.zencdn.net/'.$this->version().'/video-js.css');
        $this->add('http://vjs.zencdn.net/'.$this->version().'/video.js');
    }
}
