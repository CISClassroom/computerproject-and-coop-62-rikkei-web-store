@extends('client.layouts.app')

<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="container pt-5">
            @php
            $user = auth()->user();
            $addresses = $user->address;
            @endphp
            <h2 class="__accountheader text-uppercase">{{ __('Checkout') }}</h2>
            <form action=" {{ route('checkout.store', $user->id) }} " method="POST">
                {{-- {!! Form::open(['url' => route('checkout.store', ['id' => $user->id])]) !!} --}}
                <div class="row row-cols-1 row-cols-md-2 mt-3">
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-body overflow-auto">
                                <h3 class="__detailheader">{{ __('Delivery Address') }}</h3>
                                <hr>
                                {{ Form::hidden('i', $i = 0) }}
                                {{-- {{ Form::hidden('total', $total = 0) }} --}}
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
                                @if ($message = Session::get('address-success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                                @endif
                                @csrf
                                @method('POST')
                                <table class="table table-hover table-borderless">
                                    {{ Form::hidden('count', count($addresses)) }}
                                    <tbody id="tbody_delivery">
                                        @if(!count($addresses))
                                        <div class="container">
                                            <label class=" text-size-10 text-center">
                                                {{ __('Your have no address book yet') }}
                                            </label>
                                        </div>
                                        @elseif(count($addresses))
                                        {{-- Loop --}}
                                        @foreach ($addresses as $address)
                                        <tr style="line-height: 50px; min-height: 50px; height: 50px;">
                                            <td class="font-weight-bold" style="white-space: nowrap; width: 1%;">
                                                {{ ++$i }}
                                            </td>

                                            <td>
                                                {{ Str::limit($address->name , 10) }}
                                                {{ Str::limit($address->addressline1 , 10) }}
                                            </td>
                                            <td>
                                                {{ $address->city }}
                                            </td>
                                            <td>
                                                {{ $address->phonenumber }}
                                            </td>
                                            <td style="white-space: nowrap; width: 1%;">
                                                <a href=" {{ route('address.edit', $address->id) }} "
                                                    class="btn btn-link rounded-0 text-muted mt-2">
                                                    {{ __('edit') }}
                                                </a>
                                            </td>
                                            <td class="acction" style="white-space: nowrap; width: 1%;">
                                                <label
                                                    class="btn btn-outline-dark rounded-0 mt-2 @if($i == 1) active @endif">
                                                    <input type="radio" name="address_id"
                                                        id="Address-{{ $address->id }}" value="{{ $address->id }}"
                                                        @if($i==1) checked @endif>
                                                    {{ __('Select') }}
                                                </label>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                @endif
                                <div class="container">
                                    <button class="btn btn-dark btn-lg rounded-0" type="button" data-toggle="modal"
                                        data-target="#newAddressModal">
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
                                        {{-- <a href="{{ route('checkout.index') }}" --}}
                                        <button type="submit"
                                            class="btn btn-dark rounded-0 btn-lg btn-block text-uppercase">
                                            {{ __('Proceed to next step') }}
                                        </button>
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
@include('client.shop.checkouts.components.newaddress-modal')
