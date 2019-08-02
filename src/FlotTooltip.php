<?php

namespace HnhDigital\LaravelFrontendAssetPack;

class FlotTooltip extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/flot.tooltip/'.$this->version().'/jquery.flot.tooltip.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/jquery.flot.tooltip.min.js');
    }
}
