<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\IArticleService;
use App\Services\ArticleService;
use App\Infrastructure\Factories\Interfaces\IArticleFactory;
use App\Infrastructure\Factories\ArticleRepository;
use App\Infrastructure\Repositories\Interfaces\IArticleRepository;
use App\Infrastructure\Repositories\ArticleFactory;

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
            'App\Infrastructure\Repositories\Interfaces\IArticleRepository',
            'App\Infrastructure\Repositories\ArticleRepository'
        );

        $this->app->bind(
            'App\Services\Interfaces\IArticleService',
            'App\Services\ArticleService'
        );
    }
}
