@extends('client.layouts.app')

@section('content')
@php
    $now = date('Y-m-d');
@endphp
{{-- content --}}
<section class="">
    <div class="mx-5">
        <div class="__mainCarousel">
            <div id="carouselSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('/storage/assets/images/nike-react-home.jpg')}}" class="d-block w-100 dim"
                            alt="homepage cover">
                        <div class="carousel-caption d-none d-md-block mb-5">
                            <h1 class="text-uppercase font-weight-bolder">{{__('DESIGNED TO HELP REDUCE INJURY')}}</h1>
                            <p class="text-size-10">Our newest shoe is built to help keep you doing what you love.
                                Because there’s only one thing that’s worse than being injured—not running.</p>
                            <a class="btn btn-light rounded-pill text-size-10" type="button" href="/shop">Shop</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="__text-featured">
                    <p class="text-size-6">Featured</p>
                </div>
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img class="img-responsive"
                                src="{{url('/storage/assets/images/nike-air-force-1-home.jpg')}}"
                                style="width: 100%;height: 700px;object-fit: cover;">
                            <div class="img-overlay">
                                <p class="text-light font-weight-bold text-size-8">Nike Air Force 1 React</p>
                            <a class="btn btn-light rounded-pill" type="button" href="{{ route('shop.show',4) }}">Shop</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img class="img-responsive" src="{{url('/storage/assets/images/nike-icon-clash-home.jpg')}}"
                                style="width: 100%;height: 700px;object-fit: cover;">
                            <div class="img-overlay">
                                <p class="text-light font-weight-bold text-size-8">Nike Icon Clash Collection</p>
                                <a class="btn btn-light rounded-pill" type="button" href="{{ route('shop.show',3) }}">Shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="__text-basketball">
                    <p class="text-size-6">New from Nike Basketball</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="img-wrapper">
                            <img class="img-responsive" src="{{url('/storage/assets/images/nike-basketball-home.jpg')}}"
                                style="width: 100%;height: 700px;object-fit: cover;">
                            <div class="img-overlay">
                                <p class="text-dark font-weight-bold text-size-1">PG 4</p>
                                <a class="btn btn-dark rounded-pill" type="button" href="{{ route('shop.show',7) }}">
                                    Shop
                                </a>
                                <a class="btn btn-dark rounded-pill" type="button" href="{{ route('find-product','category='.'5') }}">
                                    Shop Collection
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="__text-swiper">
                <p class="text-size-6">Featured items</p>
            </div>
            @include('client.shop.components.swiper')
        </div>
        <div class="mt-5">
            <div class="__text-more-nike">
                <p class="text-size-6">More Nike</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col-md-4">
                    <div class="img-wrapper">
                        <img class="img-responsive" src="{{url('/storage/assets/images/nike-react-home.jpg')}}"
                            style="width: 100%;height: 500px;object-fit: cover;">
                        <div class="img-overlay">
                            <p></p>
                            <a class="btn btn-light rounded-pill" type="button" href="{{ route('find-product','type='.'1') }}">Men's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-wrapper">
                        <img class="img-responsive" src="{{url('/storage/assets/images/nike-air-force-1-home.jpg')}}"
                            style="width: 100%;height: 500px;object-fit: cover;">
                        <div class="img-overlay">
                            <p></p>
                            <a class="btn btn-light rounded-pill" type="button" href="{{ route('find-product','type='.'2') }}">Women's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img-wrapper">
                        <img class="img-responsive" src="{{url('/storage/assets/images/nike-icon-clash-home.jpg')}}"
                            style="width: 100%;height: 500px;object-fit: cover;">
                        <div class="img-overlay">
                            <p></p>
                            <a class="btn btn-light rounded-pill" type="button" href="{{ route('find-product','type='.'6') }}">Kid's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
