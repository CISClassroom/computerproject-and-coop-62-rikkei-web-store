<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    public function index()
    {
        // return redirect()->route('order.store');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        dd($request);
        $user_id = Auth::user()->id;
        if ($request->session()->has('cart')) {
            dd($request->session()->get('cart'));
        } else {
            echo 'No data in the session';
        }

        // if (!$request) {

        //     abort(404);
        // }
    }

    public function postOrder(Request $request)
    {
        // $order = Order::latest()->limit(1);
        // dd($order->id);

        // dd($request->session()->all());
        $user_id = Auth::user()->id;
        if (!$request && !$user_id) {
            abort(404);
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
            // dd($validOrderData);

            // Order::create($orderArrData);

            return redirect()->route('postProductOrder', compact('request'))
                ->with('order-success', 'Order successfully.');
        } else {

            return redirect()->route('payment.index')
                ->with('order-failed', 'Something went wrong. Please try again later.');
        }
    }
    public function postProductOrder(Request $request)
    {
        $order = Order::latest()->limit(1);
        // foreach ($order as $orr)
        // {
            dd($order->get('id'));

        // }
        $user_id = Auth::user()->id;
        if (!$request && !$user_id && !$order) {
            abort(404);
        }
        dd($order);
        if ($request->session()->has('cart') && $request->session()->has('address') && $request->session()->has('sumprice') && $request->session()->has('paymentdetail')) {
            foreach (Session::get('cart') as $poData) {
                $poArrData = [
                    "order_id" => $order_id,
                    "cardnumber" => $poData->cardnumber,
                    "nameoncard" => $poData->nameoncard,
                    "expirationdate" => $poData->expirationdate,
                    "cvcode" => $poData->cvcode,
                ];

                $validator = Validator::make($request->session()->get('cart'), [
                    'product_id' => 'required|int',
                    'name' => 'required',
                    'quantity' => 'required',
                    'price' => 'required',
                    'image_url' => 'required',
                    'color' => 'required',
                    'size' => 'required',
                ]);

                session()->put('paymentdetail', $paymentdetail);
                $cartData = $product_id;
                Order::create($cartData);

            }
            return redirect()->route('//////somepage for let user know')
                ->with('order-success', 'Order successfully.');
        }
        else {

            return redirect()->route('payment.index')
                ->with('order-failed', 'Something went wrong. Please try again later.');
        }
    }


    public function show($id)
    {
        //
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
