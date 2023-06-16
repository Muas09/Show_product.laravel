<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductType;
use App\Models\Product;
use App\Models\type_product;

use function PHPSTORM_META\type;

class AppServiceProvider extends ServiceProvider
{
    /**												
	    												
	     *												
	     * @return void												
	     */
    public function register()
    {
    }

    /**												
	     * Bootstrap any application services.												
	     *												
	     * @return void												
	     */
    public function boot()
    {
        view()->composer('header', function ($view) {
            $loai_sp = type_Product::all();
            $view->with('loai_sp', $loai_sp);
        });
        view()->composer('page.type_product', function ($view) {
            $product_new = Product::where('new', 1)->orderBy('id', 'DESC')->skip(1)->take(8)->get();
            $view->with('product_new', $product_new);
        });
    }
}
