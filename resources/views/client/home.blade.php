@extends('client.layouts.master')

@section('content')

{{-- content --}}
<section>
    {{-- <div class="text-center">
        <img src="{{url('/storage/assets/images/nike-react-home.jpg')}}" class="img-fluid" alt="Responsive image">
    </div> --}}
    <div class="mx-5">
        <div class="__mainCarousel">
            <div id="carouselSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url('/storage/assets/images/nike-react-home.jpg')}}" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block mb-5">
                            <h1 class="text-uppercase font-weight-bolder">DESIGNED TO HELP REDUCE INJURY</h1>
                            <p class="text-size-10">Our newest shoe is built to help keep you doing what you love.
                                Because there’s only one thing that’s worse than being injured—not running.</p>
                            <button class="btn btn-light rounded-pill text-size-10" type="button">Shop</button>

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
                                <button class="btn btn-light rounded-pill" type="button" href="#">Shop</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img class="img-responsive" src="{{url('/storage/assets/images/nike-icon-clash-home.jpg')}}"
                                style="width: 100%;height: 700px;object-fit: cover;">
                            <div class="img-overlay">
                                <p class="text-light font-weight-bold text-size-8">Nike Icon Clash Collection</p>
                                <button class="btn btn-light rounded-pill" type="button" href="#">Shop</button>
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
                                <button class="btn btn-dark rounded-pill" type="button" href="#">Shop</button>
                                <button class="btn btn-dark rounded-pill" type="button" href="#">Shop
                                    Collection</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="__text-basketball">
                <p class="text-size-6">Swiper</p>
            </div>
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="img-responsive" src="{{url('/storage/assets/images/nike-basketball-home.jpg')}}"
        style="width: 100%;height: 700px;object-fit: cover;">
    </div>
    <div class="swiper-slide">
        <img class="img-responsive" src="{{url('/storage/assets/images/nike-basketball-home.jpg')}}"
            style="width: 100%;height: 700px;object-fit: cover;">
    </div>
    <div class="swiper-slide">Slide 3</div>
    <div class="swiper-slide">Slide 4</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    </div>
    </div>

    <div class="mt-5">
        <div class="__text-product">
            <p class="text-size-6">The New Jordan x PSG Collection</p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('/storage/assets/images/nike-basketball-home.jpg')}}" class=" w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('/storage/assets/images/nike-basketball-home.jpg')}}" class=" w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{url('/storage/assets/images/nike-basketball-home.jpg')}}" class="w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
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
                        <button class="btn btn-light rounded-pill" type="button" href="#">Men's</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-wrapper">
                    <img class="img-responsive" src="{{url('/storage/assets/images/nike-air-force-1-home.jpg')}}"
                        style="width: 100%;height: 500px;object-fit: cover;">
                    <div class="img-overlay">
                        <p></p>
                        <button class="btn btn-light rounded-pill" type="button" href="#">Women's</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-wrapper">
                    <img class="img-responsive" src="{{url('/storage/assets/images/nike-icon-clash-home.jpg')}}"
                        style="width: 100%;height: 500px;object-fit: cover;">
                    <div class="img-overlay">
                        <p></p>
                        <button class="btn btn-light rounded-pill" type="button" href="#">Kid's</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
