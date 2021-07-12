<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use App\Payment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $payments = Payment::with('order.user' ,'order.products')->get();
        //  dd($payments[0]->products[0]->pivot);
        return view('Admin.order.index', compact('payments'));
    }
    public function changeStatus(Request $request)
    {
        $request->validate([
            'payment' | 'required|integer',
            'status' | 'required|integer',
        ]);
        Payment::find($request->input('payment'))->update([
            'status' => $request->input('status')
        ]);
        return redirect()->route('admin.order.index')->withSuccess(__('iranturan.success message'));
    }
}
