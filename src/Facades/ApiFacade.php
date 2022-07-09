<?php

namespace Aqayepardakht\LaravelSdk\Facades;

use Illuminate\Support\Facades\Facade;

class ApiFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'aqayepardakht';
    }
}
