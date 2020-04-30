<?php

namespace Mikofb\MtnSmsCloud\Facade;

use Illuminate\Support\Facades\Facade;

class MtnSmsCloud extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "mtn-sms-cloud";
    }
}
