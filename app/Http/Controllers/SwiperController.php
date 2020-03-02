<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SwiperController extends Controller
{

    public function index()
    {
        $products = Product::latest()->paginate(9);
        return view('client.shop.components.swiper', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 9);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $product, $id)
    {
        return view('client.shop.show', compact('products'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
