<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ArticleService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Infrastructure\Factories\Interfaces\IArticleFactory',
            'App\Infrastructure\Factories\ArticleFactory'
        );

        $this->app->bind(
            'App\Infrastructure\Factories\Interfaces\IArticleFactory',
            'App\Infrastructure\Factories\ArticleFactory'
        );

        $this->app->bind('App\Services\Interfaces\IArticleService', function() {
            return new ArticleService(

            );
        });
    }
}
