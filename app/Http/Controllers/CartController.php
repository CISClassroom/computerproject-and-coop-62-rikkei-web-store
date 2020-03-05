<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


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
        $id = $request->id;
        $product = Product::find($id);

        $now = date('Y-m-d');
        $discountedPercent = $product->promotions->where('start_at', '<=', $now )->where('end_at', '>=', $now)->first();
        $discountedPercent = $discountedPercent ? $discountedPercent->discount_percent : 0;
        $discountedPrice = (($product->price) / 100) * ($discountedPercent);
        $finalPrice = ($product->price) - ($discountedPrice);


        if (!$product) {

            abort(404);
            //product not found
        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [

                    "product_id" => $product->id,
                    "name" => $product->name,
                    "quantity" => 1,
                    "fullprice" => $product->price,
                    "price" => $finalPrice,
                    "image_url" => '/' . $product->image_url,
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
            "fullprice" => $product->price,
            "price" => $finalPrice,
            "image_url" => '/' . $product->image_url,
            "color" => $request->color,
            "size" => $request->size,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('cart-success', 'Product added to cart successfully!');
    }

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

    public function storeOrder(Request $request)
    {

        $user_id = Auth::user()->id;

        //fail
        if (!$request && !$user_id) {
            return redirect()->route('status')
                ->with('status-fail', 'abort-storeOrder:value_required');
        }


        if ($request->session()->has('cart') && $request->session()->has('address') && $request->session()->has('sumprice') && $request->session()->has('paymentdetail')) {

            $addressData = $request->session()->get('address');
            $priceData = $request->session()->get('sumprice');
            $paymentData = $request->session()->get('paymentdetail');

            // dd($addressData[$user_id]);
            // dd($addressData[$user_id]['address_id']);

            $orderArrData = [
                "user_id" => $user_id,
                "address_id" => $addressData[$user_id]['address_id'],
                "subtotal" => $priceData[$user_id]['subtotal'],
                "shipping" => $priceData[$user_id]['shipping'],
                "discount" => $priceData[$user_id]['discount'],
                "sumtotal" => $priceData[$user_id]['sumtotal'],
                "paymentoption" => $paymentData[$user_id]['paymentoption'],
            ];

            Validator::make($orderArrData, [
                'user_id' => 'required|int',
                'address_id' => 'required',
                'subtotal' => 'required|decimal',
                'shipping' => 'required|decimal',
                'discount' => 'required|decimal',
                'sumtotal' => 'required|decimal',
                'paymentoption' => 'required',
            ]);

            //store orderArrData to DB table orders
            Order::create($orderArrData);

            //select lastest order
            $order_id = Order::select('id')->where('user_id','=',$user_id)->latest()->limit(1)->value('id');

            // put order id in session
            $order[$order_id] = [
                    "order_id" => $order_id,
            ];
            session()->put('order', $order);

            //complete
            return redirect()->route('storeProductOrder', compact('request'));

        } else {
            //warning
            return redirect()->route('status')
                ->with('status-warning', 'storeOrder:detail_missing');
        }
    }
    public function storeProductOrder(Request $request)
    {
        $user_id = Auth::user()->id;
        $order_id = Order::select('id')->where('user_id','=',$user_id)->latest()->limit(1)->value('id');

        // fail;
        if (!$request && !$user_id && $order_id) {
            return redirect()->route('status')
                ->with('status-fail', 'abort-storeProductOrder:value_required');
        }

        if ($request->session()->has('cart') && $request->session()->has('address') && $request->session()->has('sumprice') && $request->session()->has('paymentdetail')) {
            foreach (Session::get('cart') as $productOrderData) {

                $productOrderArrData = [
                    "order_id" => $order_id,
                    "product_id" => $productOrderData['product_id'],
                    "color" => $productOrderData['color'],
                    "size" => $productOrderData['size'],
                    "quantity" => $productOrderData['quantity'],
                ];


                Validator::make($productOrderArrData, [
                    "order_id" => 'required|int',
                    "product_id" => 'required|int',
                    "color" => 'required',
                    "size" => 'required',
                    "quantity" => 'required|int',
                ]);

                //store productOrderArrData to DB table Product_orders
                OrderProduct::create($productOrderArrData);
            }
            session()->forget('cart');
            session()->forget('sumprice');
            session()->forget('address');
            session()->forget('paymentdetail');
            session()->forget('order');

            // complete
            return redirect()->route('status')
                ->with('status-success', 'storeProductOrder:complete');
        } else {
            //warning
            return redirect()->route('status')
                ->with('status-warning', 'storeProductOrder:detail_missing');
        }
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
