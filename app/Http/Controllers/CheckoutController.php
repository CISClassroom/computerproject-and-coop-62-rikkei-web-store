<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $address = Auth::user()->address;
        return view('client.shop.checkouts.index', compact('address'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    public function create()
    {
        //
    }


    public function storeCartSummary(Request $request)
    {
        // dd($request->all());
        $user_id = Auth::user()->id;
        $sumprice = $request;

        if (!$sumprice) {
            abort(404);
        }

        // dd($user_id);

        //replace old price
        if ($sumprice) {

            $sumprice = [
                $user_id => [

                    "subtotal" => $sumprice->subtotal,
                    "shipping" => $sumprice->shipping,
                    "discount" => $sumprice->discount,
                    "sumtotal" => $sumprice->sumtotal,
                ]
            ];

            session()->put('sumprice', $sumprice);

            return redirect()->route('checkout.index');
        }
        // if item not exist then add
        $sumprice[$user_id] = [
            "subtotal" => $sumprice->subtotal,
            "shipping" => $sumprice->shipping,
            "discount" => $sumprice->discount,
            "sumtotal" => $sumprice->sumtotal,
        ];

        session()->put('sumprice', $sumprice);

        return redirect()->route('checkout.index');
    }

    public function applyPromotionCode(Request $request)
    {
        dd($request->all());
        // $summary = $request->address_id;
        // $address = Address::find($address_id);
        // dd($address->name);


        // if (!$address) {

        //     abort(404);
        // }

        // //replace old address
        // if ($address) {

        //     $address = [
        //         $address_id => [
        //             "name" => $address->name,
        //             "addressline1" => $address->addressline1,
        //             "addressline2" => $address->addressline2,
        //             "city" => $address->city,
        //             "country" => $address->country,
        //             "phonenumber" => $address->phonenumber,
        //             "zipcode" => $address->zipcode,
        //         ]
        //     ];

        //     session()->put('address', $address);

        //     return redirect()->route('payment.index')
        // ->with('select-address-success', 'Address has been selected!');
        // }
        // // if item not exist then add
        // $address[$address_id] = [
        //     "id" => $address->id,
        //     "name" => $address->name,
        //     "addressline1" => $address->addressline1,
        //     "addressline2" => $address->addressline2,
        //     "city" => $address->city,
        //     "country" => $address->country,
        //     "phonenumber" => $address->phonenumber,
        //     "zipcode" => $address->zipcode,
        // ];

        // session()->put('address', $address);

        // return redirect()->route('payment.index')
        // ->with('select-address-success', 'Address has been selected!');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $user_id = Auth::user()->id;
        $address_id = $request->address_id;
        $address = Address::find($address_id);

        // dd($address->name);


        if (!$address) {

            abort(404);
        }

        //replace old address
        if ($address) {

            $address = [
                $user_id => [
                    "address_id" => $address_id,
                    "name" => $address->name,
                    "addressline1" => $address->addressline1,
                    "addressline2" => $address->addressline2,
                    "city" => $address->city,
                    "country" => $address->country,
                    "phonenumber" => $address->phonenumber,
                    "zipcode" => $address->zipcode,
                ]
            ];

            session()->put('address', $address);

            return redirect()->route('summary')
                ->with('summary-warning', 'Please check all details before proceed!');
        }
        // if item not exist then add
        $address[$user_id] = [
            "id" => $address->id,
            "name" => $address->name,
            "addressline1" => $address->addressline1,
            "addressline2" => $address->addressline2,
            "city" => $address->city,
            "country" => $address->country,
            "phonenumber" => $address->phonenumber,
            "zipcode" => $address->zipcode,
        ];

        session()->put('address', $address);

        return redirect()->route('summary')
                ->with('summary-warning', 'Please check all details before proceed!');
    }

    public function summary()
    {
        return view('client.shop.checkouts.summary')->with('i');
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
