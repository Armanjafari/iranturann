<?php

namespace App\Http\Controllers\Market;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //  dd(Auth::user()->market->products()->wherePure_id(2)->first());
        $user = Auth::user();
        // $user->market->categories;
        $categories = $user->market->categories->load('products');
        return view('Market.index', compact('categories'));
    }
    public function add(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'product' => 'required'
        ]);
        $user->market->products()->create([
            'pure_id' => $request->input('product'),
        ]);
        return back()->withSuccess(__('iranturan.success message'));
    }
    public function vareityForm()
    {
        return view('Market.variety');
    }
}
