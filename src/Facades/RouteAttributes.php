<?php

namespace Dotmra\RouteAttributes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dotmra\RouteAttributes\RouteAttributes
 */
class RouteAttributes extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Dotmra\RouteAttributes\RouteAttributes::class;
    }
}
