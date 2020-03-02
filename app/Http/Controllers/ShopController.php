<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $productCategoriesList = ProductCategory::pluck('name', 'id')->all();
        $products = Product::latest()->paginate(60);
        return view('client.shop.index', compact('products','productCategoriesList'))
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
        // dd($product);
        $products = Product::latest()->paginate(9);
        $product = Product::find($id);
        return view('client.shop.show', compact('products','product'));
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
