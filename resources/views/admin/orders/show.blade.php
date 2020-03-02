@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Order details</h2>
        </div>
    </div>
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-secondary rounded-0" href="{{ route('orders.index') }}">Back</a>
        </div>
    </div>
</div>
{{-- {{ dd($order) }} --}}
<div class="row">
    <div class="col-12 col-lg-6">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>order ID:</strong>
                    {{ $order->id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User ID:</strong>
                    {{ $order->user_id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    {{ $order->user->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Delivery address:</strong><br>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            {{ $order->address->name }} <br>
                            {{ $order->address->addressline1 }}, <br>
                            {{ $order->address->addressline2 }}, <br>
                            {{ $order->address->city }}, {{ $order->address->country }} <br>
                            {{ $order->address->zipcode }} <br>
                            {{ __('Phonenumber') }}: {{ $order->address->phonenumber }} <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Subtotal:</strong>
                    @currency($order->subtotal)
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Shipping:</strong>
                    @currency($order->shipping)
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Discount:</strong>
                    -@currency($order->discount)
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total:</strong>
                    @currency($order->sumtotal)
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Payment option:</strong>
                    {{ $order->paymentoption }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Order placed at:</strong>
                    {{ $order->created_at }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Order updated at:</strong>
                    {{ $order->updated_at }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    @if($order->orderstatus->id == 1)
                    <label class="badge badge-pill badge-secondary">{{ $order->orderstatus->name }}</label>
                    @elseif($order->orderstatus->id == 2)
                    <label class="badge badge-pill badge-warning">{{ $order->orderstatus->name }}</label>
                    @elseif($order->orderstatus->id == 3)
                    <label class="badge badge-pill badge-primary">{{ $order->orderstatus->name }}</label>
                    @elseif($order->orderstatus->id == 4)
                    <label class="badge badge-pill badge-success">{{ $order->orderstatus->name }}</label>
                    @endif
                    {{-- <label class="badge badge-pill badge-success">{{ $order->orderstatus->name }}</label> --}}
                    @can('order-edit')
                    <a class="btn btn-link rounded-0" href="{{ route('orders.edit',$order->id) }}">Edit</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product Order:</strong><br>
            <div class="card">
                <div class="card-body overflow-auto">
                    {{-- {{ dd($order->orderproduct) }} --}}
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th style="white-space: nowrap; width: 1%;">No.</th>
                                <th style="white-space: nowrap; width: 1%;">Product ID</th>
                                <th style="white-space: nowrap; width: 1%;">Image</th>
                                <th>Name</th>
                                <th style="white-space: nowrap; width: 1%;">Color</th>
                                <th style="white-space: nowrap; width: 1%;">Size</th>
                                <th style="white-space: nowrap; width: 1%;">Qty.</th>
                                <th style="white-space: nowrap; width: 1%;">Price</th>
                                <th style="white-space: nowrap; width: 1%;">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($order->orderproduct as $orderproduct)
                            <tr style="line-height: 80px; min-height: 80px; height: 80px;">
                                <td>
                                    {{ ++$i }}
                                </td>
                                <td>
                                    {{ $orderproduct->product->id }}
                                </td>
                                <td>
                                    <img src="/{{ $orderproduct->product->image_url }}" width="60" height="60"
                                        class="img-responsive" />
                                </td>
                                <td class="text-nowrap">
                                    {{ $orderproduct->product->name }}
                                </td>
                                <td class="text-nowrap">
                                    {{ $orderproduct->color }}
                                </td>
                                <td class="text-nowrap">
                                    {{ $orderproduct->size }}
                                </td>
                                <td class="text-right">
                                    {{ $orderproduct->quantity }}
                                </td>
                                <td class="text-right">
                                    @currency($orderproduct->product->price)
                                </td>
                                <td class="text-right">
                                    @currency($orderproduct->quantity * $orderproduct->product->price)
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
