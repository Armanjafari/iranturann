<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductController extends Controller
{
    public function index()
    {
        $sessionstorage = resolve(SessionInterface::class);
        $sessionstorage->set('product',10);
        $sessionstorage->set('item',11);
        $sessionstorage->set('kala',12);
        $sessionstorage->set('mahsol',13);
        $sessionstorage->unset('mahsol');
        //$sessionstorage->clear();
        dd($sessionstorage->count());
        $products = Product::all();
        return view('Product.products', compact('products'));
    }
}