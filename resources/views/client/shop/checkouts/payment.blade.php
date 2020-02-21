@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            <h2 class="__accountheader text-uppercase">{{ __('Checkout') }}</h2>
            <div class="row row-cols-1 row-cols-md-2 mt-3">
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body overflow-auto">
                            <h3 class="__detailheader">{{ __('Delivery Address') }}</h3>
                            <hr>
                            {{ Form::hidden('i', $i = 0) }}
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
                            @if(session('cart'))

                            @foreach(session('cart') as $id => $details)
                            {{ Form::hidden('stotal', $stotal = $details['quantity'] * $details['price']) }}
                            {{ Form::hidden('total', $total += $stotal) }}
                            @endforeach
                            @endif
                            </td>
                            <table class="table table-hover table-borderless">
                                <tbody>


                                        {{-- Loop --}}

                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ ++$i }}
                                            </td>
                                            <td>
                                                {{ __('Delivery Address') }}
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <button class="btn btn-link rounded-0 text-muted mt-2">
                                                    {{ __('edit') }}
                                                </button>
                                            </td>
                                            <td class="acction" style="white-space: nowrap; width: 1%;">
                                                    <label class="btn btn-outline-dark rounded-0 mt-2">
                                                        <input type="radio" name="address" id="Address-1" value="1" checked>
                                                        {{ __('Select') }}
                                                    </label>

                                            </td>
                                        </tr>
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ ++$i }}
                                            </td>
                                            <td>
                                                {{ __('Delivery Address') }}
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <button class="btn btn-link rounded-0 text-muted mt-2">
                                                    {{ __('edit') }}
                                                </button>
                                            </td>
                                            <td class="acction" style="white-space: nowrap; width: 1%;">
                                                <label class="btn btn-outline-dark rounded-0 mt-2" id="">
                                                    <input type="radio" name="address" id="Address-2" value="2">
                                                    {{ __('Select') }}
                                                </label>
                                            </td>
                                        </tr>

                                    {{-- endloop --}}


                                </tbody>
                            </table>
                            @endif
                            <div class="container">
                                <button class="btn btn-dark btn-lg rounded-0" type="button">
                                    {{ __('Add new address') }}
                                </button>
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
                                        {{ __('Proceed to next step') }}
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="container">
                                    <a href="{{ url('/shop') }}" class="btn btn-outline-dark rounded-0 btn-lg btn-block text-uppercase">
                                        {{ __('Continue Shopping') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
