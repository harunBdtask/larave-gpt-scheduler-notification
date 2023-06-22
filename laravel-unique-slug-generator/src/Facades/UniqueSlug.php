<?php

namespace HarunurRashid\LaravelUniqueSlug\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The application instance being facaded.
 *
 * @see HarunurRashid\LaravelUniqueSlug\UniqueSlug
 */

class UniqueSlug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "laravel-unique-slug";
    }
}
