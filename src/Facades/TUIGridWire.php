<?php

namespace Frnwtr\TUIGridWire\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Frnwtr\TUIGridWire\TUIGridWire
 */
class TUIGridWire extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Frnwtr\TUIGridWire\TUIGridWire::class;
    }
}
