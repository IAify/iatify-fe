<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel;
use App\Http\Middleware\LocalizationMiddleware;

class MiddlewareServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->app->booted(function () {
            $this->app->make(Kernel::class)->pushMiddlewareToGroup('web', LocalizationMiddleware::class);
        });
    }
}


?>