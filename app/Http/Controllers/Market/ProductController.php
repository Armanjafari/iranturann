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
        if (!$user->market->is_active){
            return abort(403); // TODO make a middleware
        }
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
        $products = $user->market->products->load('fulls');
        // dd($products->last()->pure->images->first());
        return view('Market.index_variety' , compact('products') );
    }
    public function editFinalVarietyForm(Full $full , Request $request)
    {
        //saveOrFail this method can be usefull
        $waranties = Waranty::all();
        $full->load('product.pure.option.values');
        $product = $full->product;
        $options = $product->pure->option->values;
        $product = $product->id;
        $full->load('product'); // start from view file 15 may
        return view('Market.variety_final_edit', compact('full' ,'waranties','product','options'));
    }
    public function editFinalVariety(Full $full , Request $request)
    {
    }
    public function search(Request $request)
    {
        // dd($request->all());
        $query = $request->input('query');
        $result = Pure::where('persian_title' ,'LIKE','%' . $query . '%')
        ->orWhere('persian_title' ,'LIKE','%' .$query)
        ->orWhere('persian_title' ,'LIKE',$query.'%' )
        ->orWhere('title' ,'LIKE','%' . $query . '%')
        ->orWhere('title' ,'LIKE',$query . '%')
        ->orWhere('title' ,'LIKE','%' . $query);
        return $result;
    }
}
