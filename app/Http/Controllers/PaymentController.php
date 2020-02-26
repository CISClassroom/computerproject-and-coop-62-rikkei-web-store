<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{

    public function index()
    {

        return view('client.shop.checkouts.payment');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $paymentdetail = $request;

        //fail
        if (!$paymentdetail) {
            return redirect()->route('status')
            ->with('status-fail', 'abort-Payment_store:value_required');
        }

        //complete
        //replace old address
        if ($paymentdetail) {

            $paymentdetail = [
                $user_id => [
                    "paymentoption" => $request->paymentoption,
                    "cardnumber" => $request->cardnumber,
                    "nameoncard" => $request->nameoncard,
                    "expirationdate" => $request->expirationdate,
                    "cvcode" => $request->cvcode,
                ]
            ];

            session()->put('paymentdetail', $paymentdetail);

            return redirect()->route('storeOrder', compact('request'));
        }

        // if item not exist then add
        $paymentdetail[$user_id] = [
            "paymentoption" => $request->paymentoption,
            "cardnumber" => $request->cardnumber,
            "nameoncard" => $request->nameoncard,
            "expirationdate" => $request->expirationdate,
            "cvcode" => $request->cvcode,
        ];

        session()->put('paymentdetail', $paymentdetail);

        return redirect()->route('storeOrder', compact('request'));

        //redirect
        // return response()->view('view', compact('data'), 200)
            //     ->header("Refresh", "5;url=/profile");

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
