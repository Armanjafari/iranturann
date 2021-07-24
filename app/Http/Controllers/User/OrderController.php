<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $userid = auth()->user()->id;
        $orders = Order::with('payment')->orderBy('created_at', 'desc')->whereUser_id($userid)->get();

        return view('user.orders' , compact('orders'));
    }
    public function details(Order $order)
    {
        if ($order->user_id != auth()->user()->id)
        return abort(404);
        $user = auth()->user();
        $post_price =$order->payment->post();
        return view('user.details', compact('order' , 'user','post_price'));
    }
}
