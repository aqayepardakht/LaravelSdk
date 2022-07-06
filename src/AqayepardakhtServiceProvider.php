<?php

namespace Aqayepardakht\laravelSdk;

use Illuminate\Support\ServiceProvider;
use Aqayepardakht\PhpSdk\Api;

class AqayepardakhtServiceProvider extends ServiceProvider {

    public function boot() {
        $this->app->bind('aqayepardakht',function() {
            return new Api();
        });

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Aqayepardakht', "Aqayepardakht\\laravelSdk\\Facades\\ApiFacade");
    }
}
