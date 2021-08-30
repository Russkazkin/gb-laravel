<?php

namespace App\Providers;

use App\Contracts\ParserContract;
use App\Contracts\SocialContract;
use App\Services\ParserService;
use App\Services\SocialService;
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
        $this->app->bind(ParserContract::class, ParserService::class);
        $this->app->bind(SocialContract::class, SocialService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
