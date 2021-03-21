<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ProductBySellerController extends Controller
{
    public function index(User $user)
    {
        if (!$user->hasRole('seller')) {
            return response()->json(['error' => 'seller Not Found !']);
        }
        return response()->json([
            'products' => $user->products,
            ]);
    }
}
