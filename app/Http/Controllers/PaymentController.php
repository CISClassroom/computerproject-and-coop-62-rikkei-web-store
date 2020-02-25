<?php

namespace App\Http\Controllers;

use App\Models\Address;
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
        dd($request->all());

        $user_id = Auth::user()->id;
        $paymentdetail = $request;

        if (!$paymentdetail) {

            abort(404);
        }

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

            // return redirect()->route('payment.index')
            // ->with('select-address-success', 'Address has been selected!');
        }
        // if item not exist then add
        $$paymentdetail[$user_id] = [
            "paymentoption" => $request->paymentoption,
            "cardnumber" => $request->cardnumber,
            "nameoncard" => $request->nameoncard,
            "expirationdate" => $request->expirationdate,
            "cvcode" => $request->cvcode,
        ];

        session()->put('paymentdetail', $paymentdetail);

        // return redirect()->route('payment.index')
            // ->with('select-address-success', 'Address has been selected!');
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
