<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * TextDiff.
 *
 * @link
 */
class TextDiff extends PackageAbstract
{
    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://cdnjs.cloudflare.com/ajax/libs/diff_match_patch/'.$this->version().'/diff_match_patch.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/text-diff-patch.min.js');
    }

    /**
     * Load after.
     *
     * @return void
     */
    public function after()
    {
        $this->add('vendor/text-diff.min.js');
    }
}
