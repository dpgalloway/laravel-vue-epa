<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Add CORS middleware if not production (for front-end dev server to communicate with laravel sever)
        if (config('app.env') !== 'production') {
            $kernel = $this->app->make('Illuminate\Contracts\Http\Kernel');
            $kernel->pushMiddleware(\Barryvdh\Cors\HandleCors::class);
        }
    }
}
