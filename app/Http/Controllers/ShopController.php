<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::latest()->paginate(60);
        return view('client.store.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 60);
    }
}
