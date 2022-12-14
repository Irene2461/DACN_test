<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Location;
use Facade\FlareClient\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        try{
            $categoriesGlobal = Category::select('id','name','slug')->get();
            $locationsCity = Location::where('parent_id', 0)->select('id','name')->get();
            $locationsDistrict = Location::where('type', 2)->select('id','name')->get();
            $locationsWards = Location::where('type', 3)->select('id','name')->get();
        }catch(\Exception $exception){

        }
        \View::share('categoriesGlobal', $categoriesGlobal ?? []);
        \View::share('locationsCity', $locationsCity ?? []);
        \View::share('locationsDistrict', $locationsDistrict ?? []);
        \View::share('locationsWards', $locationsWards ?? []);
        // Paginator::useBootstrap();

        Paginator::defaultView('components.pagination');
 
        Paginator::defaultSimpleView('components.pagination');

        
    }
}
