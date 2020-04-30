<?php

namespace Mikofb\MtnSmsCloud;

use Illuminate\Support\ServiceProvider;

class MtnSmsCloudServiceProvider extends ServiceProvider
{
    public function boot()
    {
        # code...
    }
    
    public function register()
    {
        \App::bind("mtn-sms-cloud", function(){
            return new Core\MtnSmsCloud();
        });
    }
}
