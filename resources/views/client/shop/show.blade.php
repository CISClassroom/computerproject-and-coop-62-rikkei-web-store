@extends('client.layouts.app')

@section('content')
@php
    $discountedPercent = $product->promotions->where('start_at', '<=', $now )->where('end_at', '>=', $now)->first();
    $discountedPercent = $discountedPercent ? $discountedPercent->discount_percent : 0;
    $discountedPrice = (($product->price) / 100) * ($discountedPercent);
    $finalPrice = ($product->price) - ($discountedPrice);
@endphp
    <div class="mt-5">
        <div class="mx-5 outerspace">
            <div class="container-fluid pt-5">
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
                    <div class="col-12 col-lg-8">
                        <div class="row row-cols-1">
                            <div class="container">
                                <div class="card mb-3">
                                    <h1 class="showproduct-title px-5 my-3">{{ $product->name }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-1">
                            <div class="container">
                                <div class="__product-img img-wrapper text-center">
                                    <img class="img-responsive" src="{{url($product->image_url)}}" alt="product picture"
                                        style="width: 100%; max-height: 800px; height: 800px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="container">
                            <div class="__product-detail">
                                <div class="card">
                                    <div class="card-body">
                                        {!! Form::open(['url' => route('cart.store', ['id' => $product->id])]) !!}
                                        <div class="container">
                                            @if ($message = Session::get('cart-success'))
                                            <div class="alert alert-success">
                                                <span>{{ $message }}</span>
                                                <span>
                                                    <a href="{{ route('cart.index') }}"
                                                        class="btn btn-dark">{{  __('Proceed to checkout')   }}</a>
                                                </span>
                                            </div>
                                            @endif
                                            <div class="font-weight-bold mt-3">
                                                <h2 class="text-size-6"><a href="#"
                                                        class="text-decoration-none text-dark">{{ $product->type->name }}</a>
                                                </h2>
                                            </div>
                                            <div class="font-weight-bold mt-4">
                                                <h3 class="text-size-8"><a href="#"
                                                        class="text-decoration-none text-dark">{{ $product->category->name }}</a>
                                                </h3>
                                            </div>
                                            <div class="text-left mt-5">
                                                <label for="color-container"
                                                    class="showproduct-subtitle">{{ __('Select color') }}</label>
                                            </div>
                                            <div class="container" id="color-container">
                                                <div class="btn-group-toggle" data-toggle="buttons">
                                                    <label
                                                        class="btn btn-lg btn-outline-dark border border-dark rounded-circle dotcolor showproduct-size my-1 active"
                                                        style="background-color: blue;">
                                                        <input type="radio" name="color" value="blue" id="option-blue"
                                                            checked>
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-outline-dark border border-dark rounded-circle dotcolor showproduct-size my-1 active"
                                                        style="background-color: red;">
                                                        <input type="radio" name="color" value="red" id="option-red"
                                                            checked>
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-outline-dark border border-dark rounded-circle dotcolor showproduct-size my-1 active"
                                                        style="background-color: green;">
                                                        <input type="radio" name="color" value="green" id="option-green"
                                                            checked>
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-outline-dark border border-dark rounded-circle dotcolor showproduct-size my-1 active"
                                                        style="background-color: yellow;">
                                                        <input type="radio" name="color" value="yellow"
                                                            id="option-yellow" checked>
                                                    </label>
                                                    {{-- <input type="radio" name="color" id="color-4" value="yellow" class="border border-dark rounded-circle dotcolor"
                                                style="background-color: yellow;"> --}}
                                                </div>
                                            </div>
                                            <div class="row row-cols-2">
                                                <div class="text-left col-6 mt-3">
                                                    <label for="size-container"
                                                        class="showproduct-subtitle">{{ __('Select size') }}</label>
                                                </div>
                                                <div class="text-right col-6 mt-3">
                                                    <a href="#"
                                                        class="showproduct-subtitle text-muted">{{ __('Size guide') }}</a>
                                                </div>
                                            </div>

                                            <div class="container" id="size-container">
                                                <div class="row row-eq-height row-cols-1 row-cols-md-2 btn-group-toggle"
                                                    data-toggle="buttons">
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1 active">
                                                        <input type="radio" name="size" value="US M 7 / W 8.5"
                                                            id="option-1" checked>
                                                        {{ __('US M 7 / W 8.5') }}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 7.5 / W 9"
                                                            id="option-2">
                                                        {{__('US M 7.5 / W 9')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 8 / W 9.5"
                                                            id="option-3">
                                                        {{__('US M 8 / W 9.5')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 8.5 / W 10"
                                                            id="option-4">
                                                        {{__('US M 8.5 / W 10')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 9 / W 10.5"
                                                            id="option-5">
                                                        {{__('US M 9 / W 10.5')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 9.5 / W 11"
                                                            id="option-6">
                                                        {{__('US M 9.5 / W 11')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 10 / W 11.5"
                                                            id="option-7">
                                                        {{__('US M 10 / W 11.5')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 10.5 / W 12"
                                                            id="option-8">
                                                        {{__('US M 10.5 / W 12')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 11 / W 12.5"
                                                            id="option-9">
                                                        {{__('US M 11 / W 12.5')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 11.5 / W 13"
                                                            id="option-10">
                                                        {{__('US M 11.5 / W 13')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 12 / W 13.5"
                                                            id="option-11">
                                                        {{__('US M 12 / W 13.5')}}
                                                    </label>
                                                    <label
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size my-1">
                                                        <input type="radio" name="size" value="S M 13 / W 14.5"
                                                            id="option-12">
                                                        {{__('US M 13 / W 14.5')}}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="font-weight-bold text-right mt-5">
                                                <h2 class="showproduct-price">
                                                    @if ($discountedPercent == 0)
                                                    <label class="text-decoration-none text-dark">
                                                        @currency($product->price)
                                                    </label>
                                                    @elseif ($discountedPercent != 0)
                                                    <label class="text-decoration-none textcolor-gray">
                                                        <del>@currency($product->price)</del>
                                                    </label>
                                                    @endif
                                                </h2>
                                            </div>
                                            @if ($discountedPercent != 0)
                                            <div class="row row-cols-2">
                                                <div class="col-6">
                                                    <label class="text-light badge badge-pill badge-danger font-weight-bold text-size-8 text-nowrap mt-2 pt-2">
                                                        -{{ $discountedPercent }}%
                                                    </label>
                                                </div>
                                                <div class="col-6">
                                                    {{-- <div class="font-weight-bold text-right mt-2"> --}}


                                                        <h2 class="showproduct-price text-decoration-none text-dark text-nowrap text-right">
                                                                @currency($finalPrice)
                                                        </h2>

                                                    {{-- </div> --}}
                                                </div>
                                            </div>
                                            @endif




                                            <div class="__addtocart mt-5">
                                                {{-- {!! Form::open(['url' => route('cart.store', ['id' => $product->id])]) !!} --}}
                                                <button type="submit"
                                                    class="btn btn-dark btn-lg btn-block rounded-pill text-uppercase">
                                                    {{ __('ADD TO CART')}}
                                                </button>
                                                {{-- {!! Form::close() !!} --}}
                                            </div>
                                            <div class="__favorite mt-3">
                                                <a href="#"
                                                    class="btn btn-outline-dark btn-lg btn-block rounded-pill text-uppercase icon-heart-blank">
                                                    {{ __('FAVORITE') }}
                                                </a>
                                            </div>
                                            <div class="mt-5">
                                                <label class="text-size-10 text-uppercase"> {{ __('Product Code: ') }}
                                                    {{ $product->code }} </label>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-size-12"> {{ $product->detail }}</p>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-5">
                <div class="__text-swiper">
                    <p class="text-size-6">Featured items</p>
                </div>
                @include('client.shop.components.swiper')
            </div>

        </div>
    </div>

    @endsection
