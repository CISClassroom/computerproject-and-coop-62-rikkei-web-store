<?php

namespace App\Http\Controllers;

use App\Models\Order;

// use App\Models\IModel;

use App\Models\Orderstatus;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderHistoryController extends Controller
{
    function __construct()
    {
    }
    public function index()
    {
        $user = Auth::user();
        $orders = Order::latest()->where('user_id', '=', $user->id)->paginate(8);
        return view('client.accounts.orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Order $orderhistory)
    {
        // dd($orderhistory);
        return view('client.accounts.orders.show', compact('orderhistory'))->with('i');
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
