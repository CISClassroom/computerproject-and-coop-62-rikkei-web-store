<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $now = date('Y-m-d');
        $productCategoriesList = ProductCategory::get();
        $productTypesList = ProductType::get();
        // $promotions = Promotion::all();
        $products = Product::with('promotions', 'category')->latest()->paginate(60);
        // dd($products);
        return view('client.shop.index', compact('products', 'productCategoriesList', 'productTypesList', 'now'))
            ->with('i', (request()->input('page', 1) - 1) * 60);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Product $product, $id)
    {
        $now = date('Y-m-d');
        $products = Product::with('promotions', 'type', 'category')->latest()->paginate(9);
        $product = Product::find($id);
        return view('client.shop.show', compact('products', 'product', 'now'));
    }

    public function edit(Product $product)
    {
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
    }
}
