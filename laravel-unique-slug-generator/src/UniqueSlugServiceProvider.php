<?php

namespace HarunurRashid\LaravelUniqueSlug;

use Illuminate\Support\ServiceProvider;

class UniqueSlugServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('laravel-unique-slug', function($app) {
            return new \HarunurRashid\LaravelUniqueSlug\UniqueSlug();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
