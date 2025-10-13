<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Support\Facades\View;
use App\ModelsView;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(RepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            // $view->with('baseModelView', new ModelsView\BaseLightSchema());
            $view->with('baseModelView', new ModelsView\BaseDarkSchema());
        });
    }
}
