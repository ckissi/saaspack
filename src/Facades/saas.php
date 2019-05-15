<?php

namespace ckissi\saas\Facades;

use Illuminate\Support\Facades\Facade;

class saas extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'saas';
    }
}
