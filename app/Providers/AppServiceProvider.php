<?php

namespace App\Providers;

use App\Content;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        $local = request()->segment(1);
        $rtl = $local == 'fa' ? '.rtl':"";
        $dir = $local == 'fa' ? 'rtl':"";
        View::share(['local'=> $local,'rtl'=>$rtl,'dir'=>$dir]);
    }
}
