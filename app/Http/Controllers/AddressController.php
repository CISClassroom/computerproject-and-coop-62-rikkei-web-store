<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();

        // dd($user->address()->toSql());
        // dd($user);


        // $addresses = Address::where('user_id', '=', $user->id)->paginate(8);
        // dd($addresses);
        // return view('client.accounts.addressbooks.index', compact('addresses'))
        // ->with('i', (request()->input('page', 1) - 1) * 8);

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

        Address::create($arrData);

        return redirect()->route('address.index')
            ->with('success', 'Address created successfully');
    }


    public function show($id)
    {
        $addresses = Address::find($id);
        return view('client.accounts.addressbooks.show', compact('addresses'));
    }


    public function edit(User $user, $id)
    {
        $user = User::find($id);
        $addresses = Address::find($user->id);
        return view('client.accounts.addressbooks.edit', compact('addresses','id'));
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
        // news letter function

        $input = $request->all();

        //update
        $user = User::find($id);
        // $addresses = Address::find($user->id);
        $addresses->update($input);

        return redirect()->route('address.index')
            ->with('success', 'Address updated successfully');
    }


    public function destroy($id)
    {
        Address::find($id)->delete();
        return redirect()->route('address.index')
        ->with('success', 'Address deleted successfully');
    }
}
