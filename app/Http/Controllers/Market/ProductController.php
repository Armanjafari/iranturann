<?php

namespace App\Http\Controllers\Market;

use App\Full;
use App\Http\Controllers\Controller;
use App\Product;
use App\Pure;
use App\Waranty;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','is.market']);
        
    }
    public function index()
    {
        //  dd(Auth::user()->market->products()->wherePure_id(2)->first());
        $user = Auth::user();
        if (!($user->market->is_super_active)){
            return abort(403);
        }
        // $user->market->categories;
        $categories = $user->market->categories->load('products');
        return view('Market.index', compact('categories'));
    }
    public function add(Request $request)
    {
        $user = Auth::user();
        $categories = $user->market->categories;
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
        $user = Auth::user();
        $categories = $user->market->categories;
        return view('Market.variety' , compact('categories'));
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
            'show_price' => 'required',
            'stock' => 'required',
            'is_active' => 'required',
            'ordering' => 'required',
            'product' => 'required',
        ]);
        // dd($request->all());
        try {
        Full::create([
            'color_id' => $request->input('option'),
            'price' => $request->input('price'),
            'show_price' => $request->input('show_price'),
            'stock' => $request->input('stock'),
            'is_active' => $request->input('is_active'),
            'ordering' => $request->input('ordering'),
            'waranty_id' => $request->input('waranty'),
            'product_id' => $request->input('product'),
        ]);
    } catch (Exception $e){
        return back()->withError('قبل این به رنگ قیمت داده اید');

    }
        return back()->withSuccess(__('iranturan.success message'));
    }
    public function varietyIndex(Product $product)
    {
        $user = Auth::user();
        $product->load('fulls');
        // dd($products->last()->pure->images->first());
        return view('Market.index_variety' , compact('product') );
    }
    public function editFinalVarietyForm(Full $full , Request $request)
    {
        // dd((int)Auth::user()->market->id);
        // dd($full->product->market_id); TODO do this in middleware
        if(!($full->product->market_id == Auth::user()->market->id))
        {
        return abort(404);
        }
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
    { // TODO check security bugs
        // dd($request->all());
        if(!($full->product->market_id == Auth::user()->market->id))
        {
        return abort(404);
        }
        try {
            $full->update([
                'color_id' => $request->input('option'),
                'price' => $request->input('price'),
                'show_price' => $request->input('show_price'),
                'stock' => $request->input('stock'),
                'is_active' => $request->input('is_active'),
                'ordering' => $request->input('ordering'),
                'waranty_id' => $request->input('waranty'),
                'product_id' => $request->input('product'),
            ]);
        } catch (Exception $e) { // TODO refactor this
            return back()->withError('قبل این به رنگ قیمت داده اید');

        }
        
        return redirect()->route('market.variety.index', $request->input('product'))->withSuccess(__('iranturan.success message'));
    }
    public function search(Request $request)
    {
        // dd($request->all());
        $market = auth()->user()->market;
        $query = $request->input('query');
        if(!$request->has('query'))
        return response()->json(['error' => 'ورودی وارد نشده ']);
        $pures = [];
        foreach ($market->products as $product) {
            $product = $product->pure()->where('persian_title' ,'LIKE','%' . $query . '%')
            ->orWhere('persian_title' ,'LIKE','%' .$query)
            ->orWhere('persian_title' ,'LIKE',$query.'%' )
            ->orWhere('title' ,'LIKE','%' . $query . '%')
            ->orWhere('title' ,'LIKE',$query . '%')
            ->orWhere('title' ,'LIKE','%' . $query)->get();
            array_push($pures ,$product);
        }

        Arr::flatten($pures);
        dd($pures);
        // if ($result)
        // return response()->json(['error' => ' محصولی پیدا نشد ']);
        return view('Market.indexSearch');
    }
}
