@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            @php
            $user = auth()->user();
            $addresses = $user->address;
            @endphp
            <h2 class="__accountheader text-uppercase">{{ __('Checkout') }}</h2>
            <div class="row row-cols-1 row-cols-md-2 mt-3">
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body overflow-auto">
                            <h3 class="__detailheader">{{ __('Summary') }}</h3>
                            {{ Form::hidden('total', $total = 0) }}
                            @if(!session('cart'))
                            <div class="container text-center my-5">
                                <label class="showproduct-title text-muted"> {{ __('Your cart is emty') }} </label>
                            </div>
                            @elseif(session('cart'))
                            <div class="alert alert-warning">
                                <p>{{ __('Please check all details before proceed!') }}</p>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row justify-content-between mt-5 mb-3">
                                    <label class="__detailheader text-size-8">{{ __('Product') }}</label>
                                    <a href="{{ route('cart.index') }}" type="button"
                                        class="btn btn-dark rounded-0">{{__('Edit')}}</a>
                                </div>
                            </div>
                            <table class="table table-hover table-borderless">
                                <thead>
                                    <tr>
                                        <th style="white-space: nowrap; width: 1%;">No.</th>
                                        <th style="white-space: nowrap; width: 1%;">Image</th>
                                        <th>Name</th>
                                        <th style="white-space: nowrap; width: 1%;">Color</th>
                                        <th style="white-space: nowrap; width: 1%;">Size</th>
                                        <th style="white-space: nowrap; width: 1%;">Qty.</th>
                                        <th style="white-space: nowrap; width: 1%;">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

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
                                        <td class="text-nowrap">
                                            {{ $details['color'] }}
                                        </td>
                                        <td class="text-nowrap">
                                            {{ $details['size'] }}
                                        </td>
                                        <td class="text-right">
                                            {{ $details['quantity'] }}
                                        </td>
                                        <td class="text-right">
                                            @currency( $stotal = $details['quantity'] * $details['price'] )
                                            {{ Form::hidden('sumtotal', $total += $stotal) }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                            @if(!session('address'))
                            <div class="container text-center my-5">
                                <label class="showproduct-title text-muted">
                                    {{ __('You are not selected any deliver address') }} </label>
                            </div>
                            @elseif(session('address'))
                            <hr>
                            <div class="container">
                                <div class="row justify-content-between mt-5 mb-3">
                                    <label class="__detailheader text-size-8">{{ __('Delivery address') }}</label>
                                    <a href="{{ route('checkout.index') }}" type="button"
                                        class="btn btn-dark rounded-0">{{__('Edit')}}</a>
                                </div>
                            </div>
                            <table class="table table-hover table-borderless">
                                @foreach(session('address') as $id => $address)
                                {{-- {{ $address['name'] }} --}}
                                <tbody>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Reciever Name') }} </td>
                                        <td>{{ $address['name'] }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Address Line 1') }} </td>
                                        <td>{{ $address['addressline1'] }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Address Line 2') }} </td>
                                        <td>{{ $address['addressline2'] }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('City') }} </td>
                                        <td>{{ $address['city'] }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Country') }} </td>
                                        <td>{{ $address['country'] }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('Phonenumber') }} </td>
                                        <td>{{ $address['phonenumber'] }}</td>
                                    </tr>
                                    <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                        <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                            {{ __('ZIPcode') }} </td>
                                        <td>{{ $address['zipcode'] }}</td>
                                    </tr>
                                </tbody>
                                @endforeach
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
                                    <label for="" class="showproduct-subtitle font-weight-bold" data-type="currency">
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
        </div>
    </div>
</div>
