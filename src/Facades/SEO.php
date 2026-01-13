<?php

namespace spc2356789\SEO\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \34ML\SEO\SEO
 */
class SEO extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \spc2356789\SEO\SEO::class;
    }
}
