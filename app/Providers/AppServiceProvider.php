<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models;

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
        $data = [
            'menu' => Models\Menu::all(),
            'tours' => Models\Tour::take(6)->get(),
            'guided_tours' => Models\GuidedTour::take(6)->get(),
            'places' => Models\Place::take(6)->get()
        ];
        View::composer('site.layouts.layout',function($view) use($data){
            $view->with($data);
        });
    }
}
