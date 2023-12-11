<?php

namespace App\Providers;

use App\Models\Cart;
use Illuminate\Pagination\Paginator;
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
        //
        View::composer('layout.template', function ($view) {
            if (auth()->check()) {
                $userCart = Cart::where('user_id', auth()->user()->id)->latest()->get();
            } else {
                $userCart = [];
            }

            $view->with('userCart', $userCart);
        });
        Paginator::useBootstrapFive();
    }
}
