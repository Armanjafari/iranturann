<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('user' ,'payment', 'products')->get();
        //  dd($orders[0]->products[0]->pivot);
        return view('Admin.order.index', compact('orders'));
    }
}
