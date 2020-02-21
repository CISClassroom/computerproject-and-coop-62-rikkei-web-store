@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader text-uppercase">{{ __('Cart') }}</h2>
            <div class="row row-cols-1 row-cols-md-2 mt-3">
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body overflow-auto">
                            <h3 class="__detailheader">{{ __('Product Summary') }}</h3>
                            <hr>
                            {{ Form::hidden('total', $total = 0) }}
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
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
                                            {{ Form::hidden('invisible', $total += $stotal) }}
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
                            <div class="row row-cols-2 mb-3">
                                <div class="container">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Apply coupon code here"
                                            aria-label="coupon code" aria-describedby="buttonApplyCoupon">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-dark" type="button"
                                                id="buttonApplyCoupon">{{ __('Apply') }}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="container text-right mb-3">
                                    <a href="#" class="btn btn-outline-danger rounded-0">
                                        {{ __('Clear') }}
                                    </a>
                                </div>

                            </div>

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
                                    <label for="" class="showproduct-subtitle font-weight-bold" data-type="currency">
                                        @currency($total)
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
                                        @currency($shipping = 100.00)
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
                                        {{ __('-') }}@currency($discount = 100.00)
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
                                        @currency($sumtotal = $total + $shipping - $discount)
                                    </label>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="container">
                                    <a href="#" class="btn btn-dark rounded-0 btn-lg btn-block text-uppercase">
                                        {{ __('Check out') }}
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="container">
                                    <a href="{{ url('/shop') }}"
                                        class="btn btn-outline-dark rounded-0 btn-lg btn-block text-uppercase">{{ __('Continue Shopping') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
