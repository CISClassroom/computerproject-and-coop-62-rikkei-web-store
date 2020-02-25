@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            @php
            $user = auth()->user();
            $addresses = $user->address;
            @endphp
            <h2 class="__accountheader text-uppercase">{{ __('Checkout') }}</h2>
            <form action=" {{ route('payment.store', $user->id) }} " method="POST">
                @csrf
                @method('POST')
                <div class="row row-cols-1 row-cols-md-2 mt-3">
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-body overflow-auto">
                                <h3 class="__detailheader">{{ __('Payment method') }}</h3>
                                <hr>

                                @if(session('cart') == null)
                                <div class="container text-center my-5">
                                    <label class="showproduct-title text-muted"> {{ __('Your cart is emty') }} </label>
                                </div>
                                @else

                                <table class="table table-hover table-borderless">
                                    <thead>
                                        <tr>
                                            <th style="white-space: nowrap; width: 1%;">No.</th>
                                            <th style="white-space: nowrap; width: 1%;">Image</th>
                                            <th>Name</th>
                                            <th style="white-space: nowrap; width: 1%;">Quantity</th>
                                            <th style="white-space: nowrap; width: 1%;">Price</th>
                                            <th style="white-space: nowrap; width: 1%;">Subtotal</th>
                                            <th style="white-space: nowrap; width: 1%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)

                                        <tr style="line-height: 80px; min-height: 80px; height: 80px;">
                                            <td>
                                                {{ ++$i }}
                                            </td>
                                            <td>
                                                <img src="{{ $details['image_url'] }}" width="60" height="60"
                                                    class="img-responsive" />
                                            </td>
                                            <td class="text-nowrap">
                                                {{ $details['name'] }}
                                            </td>
                                            <td class="text-right">
                                                <input type="number" value="{{ $details['quantity'] }}" name="quantity"
                                                    class="form-control mt-3 txt-quantity" min="1" />
                                            </td>
                                            <td class="text-right">
                                                @currency($details['price'])
                                            </td>
                                            <td class="text-right">
                                                @currency( $stotal = $details['quantity'] * $details['price'] )
                                                {{ Form::hidden('sumtotal', $total += $stotal) }}
                                            </td>
                                            <td class="actions text-right" data-th="">
                                                <div class="row text-center mt-4">
                                                    <button
                                                        class="btn btn-dark btn-sm rounded-0 icon-refresh-white update-cart"
                                                        data-old-url="{{ route('cart.update', ['cart' => $id]) }}"
                                                        data-id="{{ $id }}"
                                                        data-url="{{ route('cart.update', ['cart' => $id, 'quantity' => $details['quantity']]) }}">
                                                    </button>
                                                    <button
                                                        class="btn btn-outline-danger btn-sm rounded-0 icon-bin-red bg-btn-lgray remove-from-cart"
                                                        data-id="{{ $id }}"
                                                        data-url="{{ route('cart.update', ['cart' => $id]) }}"></button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            {{ __('Subtotal') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <label for="" class="showproduct-subtitle font-weight-bold"
                                            data-type="currency">
                                            @foreach(session('sumprice') as $id => $sumprice)
                                            @currency($sumprice['subtotal'])
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            {{ __('Shipping') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            @foreach(session('sumprice') as $id => $sumprice)
                                            @currency($sumprice['shipping'])
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            {{ __('Discount') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            @foreach(session('sumprice') as $id => $sumprice)
                                            {{ __('-') }}@currency($sumprice['discount'])
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="row row-cols-1 mb-3">
                                    <hr>
                                </div>
                                <div class="row row-cols-2 mb-3">
                                    <div class="col">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            {{ __('Total') }}
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <label for="" class="showproduct-subtitle font-weight-bold">
                                            @foreach(session('sumprice') as $id => $sumprice)
                                            @currency($sumprice['sumtotal'])
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="container">
                                        <a href="{{ route('payment.index') }}"
                                            class="btn btn-dark rounded-0 btn-lg btn-block text-uppercase">
                                            {{ __('Proceed to next step') }}
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="container">
                                        <a href="{{ route('shop.index') }}"
                                            class="btn btn-outline-dark rounded-0 btn-lg btn-block text-uppercase">
                                            {{ __('Continue Shopping') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('client.shop.checkouts.newaddress-modal')
