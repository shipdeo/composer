<?php

namespace Shipdeo\Facades;

use Illuminate\Support\Facades\Facade;

class ShipdeoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shipdeo';
    }
}
