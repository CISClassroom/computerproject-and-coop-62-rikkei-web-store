@extends('client.layouts.app')

@section('content')
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
                            <div class="__product-img text-center">
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
                                    <div class="container">

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
                                            <span class="border border-dark rounded-circle dotcolor"
                                                style="background-color: blue;"></span>
                                            <span class="border border-dark rounded-circle dotcolor"
                                                style="background-color: red;"></span>
                                            <span class="border border-dark rounded-circle dotcolor"
                                                style="background-color: green;"></span>
                                            <span class="border border-dark rounded-circle dotcolor"
                                                style="background-color: yellow;"></span>
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
                                            <div class="row row-eq-height row-cols-1 row-cols-md-2">
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{ __('US M 7 / W 8.5') }}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 7.5 / W 9')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 8 / W 9.5')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 8.5 / W 10')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 9 / W 10.5')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 9.5 / W 11')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 10 / W 11.5')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 10.5 / W 12')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 11 / W 12.5')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 11.5 / W 13')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 12 / W 13.5')}}
                                                    </a>
                                                </div>
                                                <div class="my-1">
                                                    <a href="#" type="button"
                                                        class="btn btn-lg btn-block btn-outline-dark showproduct-size">
                                                        {{__('US M 13 / W 14.5')}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="font-weight-bold text-right mt-5">
                                            <h2 class="showproduct-price"><a href="#"
                                                    class="text-decoration-none text-dark">{{ $product->price }}</a>
                                            </h2>
                                        </div>
                                        <div class="__addtocart mt-5">
                                            <a href="#"
                                                class="btn btn-dark btn-lg btn-block rounded-pill text-uppercase">
                                                {{ __('ADD TO CART')}}
                                            </a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5">
            @include('client.shop.swiper')
        </div>

    </div>
</div>

@endsection
