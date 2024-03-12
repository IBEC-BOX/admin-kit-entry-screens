<?php

namespace AdminKit\EntryScreens\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\EntryScreens\EntryScreens
 */
class EntryScreens extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\EntryScreens\EntryScreens::class;
    }
}
