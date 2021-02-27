<?php

namespace App\Http\Controllers\Product;

use App\Exceptions\QuantityExceededException;
use App\Http\Controllers\Controller;
use App\Product;
use App\Support\Basket\Basket;
use App\Support\Storage\Contracts\StorageInterface;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    private $basket;
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
        
    }
    public function index()
    {
        $items = $this->basket->all();
        //dd($items);
        return view('Product.basket',compact('items'));
    }
    public function add(Product $product)
    {
        try {
            $this->basket->add($product , 1);
            return back()->with('success', "محصول به سبد خرید اضافه شد");
        } catch (QuantityExceededException $e) {
            return back()->with('error', 'محصول موجود نمیباشد');
        }
    }

    public function clear()
    {
        resolve(StorageInterface::class)->clear();
    }

}
