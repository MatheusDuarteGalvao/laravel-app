<?php

namespace App\Providers;

use App\Repositories\SupporRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use SupporEloquentORM;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            SupporRepositoryInterface::class,
            SupporEloquentORM::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
