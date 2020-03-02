<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderstatus;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:order-list|order-create|order-edit|order-delete', ['only' => ['index', 'show', 'queue', 'prepare', 'deliver', 'complete']]);
        $this->middleware('permission:order-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:order-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:order-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $orders = Order::latest()->paginate(30);
        return view('admin.orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }

    public function queue()
    {
        $orders = Order::first()->where('status', '=', 1)->paginate(30);
        return view('admin.orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }

    public function prepare()
    {
        $orders = Order::first()->where('status', '=', 2)->paginate(30);
        return view('admin.orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }
    public function deliver()
    {
        $orders = Order::first()->where('status', '=', 3)->paginate(30);
        return view('admin.orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }public function complete()
    {
        $orders = Order::first()->where('status', '=', 4)->paginate(30);
        return view('admin.orders.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }


    public function show(Order $order)
    {
        // dd($order);
        return view('admin.orders.show', compact('order'))->with('i');
    }


    // public function show(Order $order)
    // {
    //     return view('client.accounts.orders.show', compact('order'))->with('i');
    // }


    public function edit(Order $order)
    {
        $orderStatusList = Orderstatus::pluck('name', 'id')->all();
        return view('admin.orders.edit', compact('order','orderStatusList'));
    }


    public function update(Request $request, Order $order)
    {
        // dd($order->status);
        // dd($order->orderstatus->id);
        request()->validate([
            'status' => 'required|int',
        ]);

        $arrData = $request->all();
        $order->update($arrData);

        return redirect()->route('orders.index')
            ->with('success', 'Order updated successfully');
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')
            ->with('success', 'order deleted successfully');
    }
}
