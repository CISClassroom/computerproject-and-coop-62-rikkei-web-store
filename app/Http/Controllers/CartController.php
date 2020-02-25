<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index()
    {
        $data = [
            'i' => 0,
            'total' => 0,
            'stotal' => 0,
        ];
        return view('client.shop.carts.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request->id);
        $id = $request->id;
        $product = Product::find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [

                    "product_id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image_url" => '/'.$product->image_url,
                    "color" => $request->color,
                    "size" => $request->size,
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('cart-success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('cart-success', 'Product added to cart successfully!');
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "product_id" => $product->id,
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image_url" => $product->image_url,
            "color" => $request->color,
            "size" => $request->size,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('cart-success', 'Product added to cart successfully!');
    }
    // {
    //     // dd($request->id);
    //     $id = $request->id;
    //     $product = Product::find($id);

    //     if (!$product) {

    //         abort(404);
    //     }

    //     $cart = session()->get('cart');

    //     // if cart is empty then this the first product
    //     if (!$cart) {

    //         $cart = [
    //             $id = [
    //                 $request->color = [
    //                     $request->size => [
    //                         "product_id" => $product->id,
    //                         "name" => $product->name,
    //                         "quantity" => 1,
    //                         "price" => $product->price,
    //                         "image_url" => $product->image_url,
    //                         "color" => $request->color,
    //                         "size" => $request->size,
    //                     ]
    //                 ]
    //             ]
    //         ];

    //         session()->put('cart', $cart);

    //         return redirect()->back()->with('cart-success', 'Product added to cart successfully!');
    //     }

    //     // if cart not empty then check if this product exist then increment quantity
    //     if (isset($cart[$id][$request->color][$request->size])) {

    //         $cart[$id][$request->color][$request->size]['quantity']++;

    //         session()->put('cart', $cart);

    //         return redirect()->back()->with('cart-success', 'Product added to cart successfully!');
    //     }

    //     // if item not exist in cart then add to cart with quantity = 1
    //     $cart[$id][$request->color][$request->size] = [
    //         "product_id" => $product->id,
    //         "name" => $product->name,
    //         "quantity" => 1,
    //         "price" => $product->price,
    //         "image_url" => $product->image_url,
    //         "color" => $request->color,
    //         "size" => $request->size,
    //     ];

    //     session()->put('cart', $cart);

    //     return redirect()->back()->with('cart-success', 'Product added to cart successfully!');
    // }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        if (!$request->ajax()) {
            // Do some thing
            return response()->json([
                'success' => 200,
                'data' => 'Not ajax'
            ]);
        }
        // dd($request->all());
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }

        return response()->json([
            'success' => 200,
            'data' => session('cart')
        ]);
    }


    public function destroy($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        session()->flash('success', 'Product removed successfully');
    }
}
