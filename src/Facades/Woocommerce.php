<?php

namespace IJagjeet\Woocommerce\Facades;

use Illuminate\Support\Facades\Facade;

class Woocommerce extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'woocommerce';
    }
}
