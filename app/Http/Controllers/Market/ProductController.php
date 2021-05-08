<?php

namespace App\Http\Controllers\Market;

use App\Full;
use App\Http\Controllers\Controller;
use App\Product;
use App\Pure;
use App\Waranty;
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
    public function vareityFinalForm(Request $request)
    {
        $request->validate([
            'product' => 'required'
        ]);
        $waranties = Waranty::all();
        $product = Product::with('pure.option.values')->find($request->input('product'));
        $options = $product->pure->option->values;
        $product = $product->id;
        return view('Market.variety_final' , compact('waranties','product' ,'options'));
    }
    public function vareityAdd(Request $request)
    {
        $request->validate([
            'waranty' => 'required|exists:waranties,id',
            'option' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'product' => 'required',
        ]);
        // dd($request->all());
        Full::create([
            'color_id' => $request->input('option'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'waranty_id' => $request->input('waranty'),
            'product_id' => $request->input('product'),
        ]);
        return back()->withSuccess(__('iranturan.success message'));
    }
    public function varietyIndex()
    {
        $user = Auth::user();
        // TODO start from here $user->load 
        return view('Market.index_variety');
    }
}
