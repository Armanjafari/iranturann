<?php

namespace App\Providers;


use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Support\Basket\Basket;
use App\Support\Cost\BasketCost;
use App\Support\Cost\Contracts\CostInterface;
use App\Support\Cost\DiscountCost;
use App\Support\Cost\ShippingCost;
use App\Support\Discount\DiscountManager;
use App\Support\Payment\Gateways\Mellat;
use App\Support\Storage\Contracts\StorageInterface;
use App\Support\Storage\SessionStorage;
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
        $this->app->bind('path.public', function (){
            return base_path() . '/public_html'; 
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(StorageInterface::class, function ($app) {
			return new SessionStorage('cart');
		});
        $this->app->bind(CostInterface::class , function($app){
            $basketCost = new BasketCost($app->make(Basket::class));
            $shippingCost = new ShippingCost($basketCost);
            $discountCost = new DiscountCost($shippingCost, $app->make(DiscountManager::class));
            return $discountCost;
        });
        
        // $this->app->singleton(Basket::class, function ($app) {
        //     return new Basket();
        // });




        /**
         * Paginate a standard Laravel Collection.
         *
         * @param int $perPage
         * @param int $total
         * @param int $page
         * @param string $pageName
         * @return array
         */
        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }
}
