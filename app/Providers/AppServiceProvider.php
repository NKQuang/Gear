<?php

namespace App\Providers;

use App\Models\ProductType;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('layout', function ($view) {
            $productTypes = ProductType::with('translation')->get();
            $view->with('productTypes', $productTypes);
        });
    }
}
