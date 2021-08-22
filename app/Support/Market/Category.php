<?php
namespace App\Support\Market;

trait Category
{
    public function SettedCategory()
    {
        return $this->categories();
    }
    public function AllowedProduct()
    {
        $this->load('categories.products');
        return $this->categories->products;
    }
}