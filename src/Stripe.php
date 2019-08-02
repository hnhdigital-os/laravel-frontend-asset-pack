<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;
use Stripe\Stripe as StripeApi;

/**
 * Stripe.
 *
 * @link
 */
class Stripe extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->add('https://js.stripe.com/v'.$this->version().'/');

        StripeApi::setApiKey(config('hnhdigital.stripe.key'));
    }
}
