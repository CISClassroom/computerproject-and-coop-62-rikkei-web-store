<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Auth::user();
        return view('client.accounts.addressbooks.index')
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }


    public function create()
    {
        $user = Auth::user();
        return view('client.accounts.addressbooks.create', compact('user'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'user_id' => 'required',
            'addressline1' => 'required',
            'city' => 'required|string',
            'country' => 'required|string',
            'phonenumber' => 'required',
            'zipcode' => 'required|int',
        ]);
        $arrData = $request->all();
        // dd($arrData);
            dd($arrData);
        Address::create($arrData);

        // return redirect(Session::get('_previous')['url'])
        // ->with('address-success', 'Address created successfully');

        return redirect()->route('address.index')
            ->with('address-success', 'Address created successfully');
    }

    public function storeAjax(Request $request)
    {
        if (!$request->ajax()) {
            return response()->json([]);
        }

        $this->validate($request, [
            'name' => 'required|string',
            'user_id' => 'required',
            'addressline1' => 'required',
            'city' => 'required|string',
            'country' => 'required|string',
            'phonenumber' => 'required',
            'zipcode' => 'required|int',
        ]);
        $arrData = $request->all();
        // dd($arrData);

        $address = Address::create($arrData);
        // $i = 0;
        $i = $request->count;

        // Get the view after render to string and pass to client via json data
        $view = view('client.shop.checkouts.components.newaddress-ajax', compact('address', 'i'))->render();

        return response()->json([
            'view' => $view
        ]);
    }


    public function show($id)
    {
        $address = Auth::user()->address->find($id);
        return view('client.accounts.addressbooks.show', compact('address'));
    }


    public function edit(Request $request, $id)
    {
        $address = Auth::user()->address->find($id);
        return view('client.accounts.addressbooks.edit', compact('address', 'id'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'addressline1' => 'required',
            'city' => 'required|string',
            'country' => 'required|string',
            'phonenumber' => 'required',
            'zipcode' => 'required|int',
        ]);

        $input = $request->all();

        //update
        $address = Auth::user()->address->find($id);
        $address->update($input);

        return redirect()->route('address.index')
            ->with('address-success', 'Address updated successfully');
    }


    public function destroy($id)
    {
        Address::find($id)->delete();
        return redirect()->route('address.index')
        ->with('address-success', 'Address deleted successfully');
    }
}
