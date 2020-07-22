<?php

namespace jjrohrer\BeStill\Facades;

use Illuminate\Support\Facades\Facade;

class BeStill extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bestill';
    }
}
