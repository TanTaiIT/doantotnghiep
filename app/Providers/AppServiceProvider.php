<?php

namespace App\Providers;
use App\Models\product;
use App\Models\Order;
use App\Models\custommer;
use App\Models\Post;
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
        view()->composer('*',function($view){
        $app_product = Product::all()->count();
        $app_post = Post::all()->count();
        $app_order = Order::all()->count();
        // $app_video = Video::all()->count();
        $app_customer = Custommer::all()->count();
        $view->with('app_product', $app_product )->with('app_post', $app_post )->with('app_order', $app_order )->with('app_customer', $app_customer );

    });

}

}