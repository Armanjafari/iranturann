<?php

namespace App\Http\Controllers\mobile\user;

use App\Http\Controllers\Controller;
use App\Market;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index(Market $market)
    {
        $userid = auth()->user()->id;
        $orders = Order::with('payment')->orderBy('created_at', 'desc')->whereUser_id($userid)->get();

        return view('mobile.user.orders' , compact('orders' , 'market'));
    }
    public function details( Market $market ,Order $order)
    {
        if ($order->user_id != auth()->user()->id)
        return abort(404);
        $user = auth()->user();
        $post_price =$order->payment->post();
        return view('mobile.user.details', compact('order' ,'market', 'user','post_price'));
    }
}
