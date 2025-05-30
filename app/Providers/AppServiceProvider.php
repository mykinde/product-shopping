<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Database\Eloquent\Factories\Factory;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    Route::aliasMiddleware('admin', AdminMiddleware::class);
    Factory::guessFactoryNamesUsing(function (string $modelName) {
        return 'Database\\Factories\\' . class_basename($modelName) . 'Factory';
    });
    // Other route definitions...
}
}
