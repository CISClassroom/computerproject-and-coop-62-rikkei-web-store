@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader text-uppercase">{{ __('My Account') }}</h2>

            <div class="row row-cols-1 row-cols-md-2 mt-3">
                @include('client.accounts.components.sidebar')
                <div class="col-8 col-md-8">
                    <div class="card">
                        <div class="card-body overflow-auto">
                            <h3 class="__detailheader">{{ __('Order details') }}</h3>
                            <hr>
                            @if ($message = Session::get('order-success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            {{-- {{ dd($orderhistory) }} --}}
                            @if(!count($orderhistory->orderproduct))
                            <div class="container">
                                <label class=" text-size-10 text-center">
                                    {{ __('Look like you don\'t have any order. Go to the shop and make some!') }}<br>
                                    <a href="{{ route('shop.index') }}"
                                        class="btn btn-dark rounded-0 btn-lg text-uppercase text-center mt-2">
                                        {{ __('Shop') }}
                                    </a>
                                </label>

                            </div>
                            @elseif(count($orderhistory->orderproduct))
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>order ID:</strong>
                                                {{ $orderhistory->id }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Delivery address:</strong><br>
                                                <div class="card" style="width: 18rem;">
                                                    <div class="card-body">
                                                        {{ $orderhistory->address->name }} <br>
                                                        {{ $orderhistory->address->addressline1 }}, <br>
                                                        {{ $orderhistory->address->addressline2 }}, <br>
                                                        {{ $orderhistory->address->city }}, {{ $orderhistory->address->country }} <br>
                                                        {{ $orderhistory->address->zipcode }} <br>
                                                        {{ __('Phonenumber') }}: {{ $orderhistory->address->phonenumber }} <br>
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
                                                @currency($orderhistory->subtotal)
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Shipping:</strong>
                                                @currency($orderhistory->shipping)
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Discount:</strong>
                                                -@currency($orderhistory->discount)
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Total:</strong>
                                                @currency($orderhistory->sumtotal)
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Payment option:</strong>
                                                {{ $orderhistory->paymentoption }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Order placed at:</strong>
                                                {{ $orderhistory->created_at }}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                @if($orderhistory->orderstatus->id == 4)
                                                <strong>Order recieved at:</strong>
                                                @else
                                                <strong>Order updated at:</strong>
                                                {{ $orderhistory->updated_at }}
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Status:</strong>
                                                @if($orderhistory->orderstatus->id == 1)
                                                <label class="badge badge-pill badge-secondary">{{ $orderhistory->orderstatus->name }}</label>
                                                @elseif($orderhistory->orderstatus->id == 2)
                                                <label class="badge badge-pill badge-warning">{{ $orderhistory->orderstatus->name }}</label>
                                                @elseif($orderhistory->orderstatus->id == 3)
                                                <label class="badge badge-pill badge-primary">{{ $orderhistory->orderstatus->name }}</label>
                                                @elseif($orderhistory->orderstatus->id == 4)
                                                <label class="badge badge-pill badge-success">{{ $orderhistory->orderstatus->name }}</label>
                                                @endif
                                                {{-- <label class="badge badge-pill badge-success">{{ $orderhistory->orderstatus->name }}</label> --}}
                                                @can('order-edit')
                                                <a class="btn btn-link rounded-0" href="{{ route('orders.edit',$orderhistory->id) }}">Edit</a>
                                                @endcan
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <strong class="font-weight-bold mt-3 mb-2">Product Order:</strong><br>
                            <table class="table table-hover table-borderless">
                                <thead class="thead">
                                    <tr>
                                        <th class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('No') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Product ID') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Image') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Name') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Color') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Size') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Qty.') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Price') }}
                                        </th>
                                        <th style="white-space: nowrap; width: 1%;">
                                            {{ __('Total') }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orderhistory->orderproduct as $orderproduct)
                                    <tr class="table table-hover table-borderless"
                                        style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold"> {{ ++$i }} </td>
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
