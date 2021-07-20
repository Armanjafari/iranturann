<?php
namespace App\Services\ProductFiltering;

trait FilteringByMarket{
    public function viewed($products)
    {
        $products = $products->sortBy('views');
        return $products;
    }
    public function desc($products)
    {
        $products = $products->sortBy('price');
        return $products;

    }
    public function asc($products)
    {
        $products = $products->sortByDesc('price');
        // $products = $products->reverse();
        return $products;
    }
    public function createdFilter($products)
    {
        $products = $products->sortByDesc('created_at');
        return $products;
    }
}

?>