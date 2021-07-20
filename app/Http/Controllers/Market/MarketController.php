<?php

namespace App\Http\Controllers\Market;

use App\Category;
use App\Http\Controllers\Controller;
use App\Market;
use App\Pure;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function __construct()
    {
        $this->middleware(['is.market' , 'auth'])->except(['index']);
    }
    public function index(Request $request, Market $seller)
    {
        // $seller->orderBy('asc');
        $products = collect($seller->fulls);
        // dd($products->where('is_active',1)->unique('product_id'));
        // dd( $seller->products);
        // foreach ($products as $product) {
        //     $product->fulls()->where('is_active',1)->get();
        // }
        return view('market' , compact('seller' , 'products'));
    }
    public function financalForm()
    {
        $user = auth()->user();
        $products = $user->market->products->load('fulls.orders.payment');
        // dd($user->market->orders);
        $full_price = 0;
        $sef_product = null;
        $arr = [];
        $ord = array();
        foreach ($products as $product) {
            // dd($product->market->categories->first()->pivot->percent);
            $user->market->categories->first()->pivot->percent;
            foreach ($product->fulls as $full) {
                // $product->pure
                foreach ($full->orders as $order) {
                    //  dd($order->pivot->market->categories->first()->pivot);
                    if ($order->payment->status >= 1)
                    {
                        array_push($ord, $order);
                        $order->pivot->wherePivot('market_id' , $user->market->id);
                        $full_price += $order->pivot->price;
                    }
                }
                
            }
        }
        foreach ($products as $product) {
            foreach ($product->market->categories as $category ) {
                $product->market->categories->first()->pivot->percent;
            }
        }
        $paid = 0;
        foreach ($user->market->financials as $financial) {
            $paid += $financial->price;
        }
        return view('Market.financial' , compact('user' , 'products' , 'full_price' , 'paid' , 'ord'));
    }
    public function ordersForm()
    {
        $orders = auth()->user()->market->orders()->WherePivot('market_id' , auth()->user()->market->id)->get()->load('products.product');
        // $orders = auth()->user()->market->orders;
        // dd($orders);
        return view('Market.orders', compact('orders'));
    }
    public function ProdcutRegistraitionForm()
    {
        $categories = Category::all();
        return view('Market.product_registration' , compact('categories'));
    }
    public function ProdcutRegistraition(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'persian_title' => 'required',
            'category' => 'required|integer',
            'description' => 'required',
            'weight' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'

        ]);
        $pure = Pure::create([
            'title' => $request->input('title'),
            'persian_title' => $request->input('persian_title'),
            'category_id' => $request->input('categoy'),
            'description' => $request->input('description'),
            'weight' => $request->input('weight'),
            'status' => 0,
        ]);
        $this->createImages($request , $pure);
        return redirect()->route('market.index')->withSuccess('محصول با موفقیت ثبت و پس از تایید در سایت قرار میگیرد');
    }
    public function createImages(Request $request,Pure $pure)
    {
        $image = $request->file('image');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $image->move(public_path($destination), $image->getClientOriginalName());
        $pure->images()->create([
            'address' => $destination . $image->getClientOriginalName()
        ]);
        foreach ($request->file('images') as $image) {
            $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
            $image->move(public_path($destination), $image->getClientOriginalName());
            $pure->images()->create([
                'address' => $destination . $image->getClientOriginalName()
            ]);
        }

    }
    public function dashboardForm()
    {
        return view('Market.dashboard');
    }
}
