<?php

namespace App\Providers;

use App\Models\Product;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        // $this->app->bind(Product::class, function () {
        //     return new Product(); // You may need to customize this based on your actual implementation.
        // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
