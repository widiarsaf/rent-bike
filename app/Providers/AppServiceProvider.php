<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Models\Sepeda;
use App\Models\Kategori;
use App\Models\Paket;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       view()->composer(['sepeda.index', 'customer.product'], function ($view) {

       $sepeda = Sepeda::with('kategori')->get();
       $view->with('sepeda', $sepeda);
      });
    }
}
