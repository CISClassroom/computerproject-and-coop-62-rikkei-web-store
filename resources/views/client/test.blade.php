@extends('client.layouts.app')

@section('content')

{{-- <img class="" src="/storage/assets/icons/1200px-Logo_NIKE.png" style="height: 20px; width: 60px;">
    <img class="" src="{{ asset('/storage/assets/icons/1200px-Logo_NIKE.png') }}" style="height: 20px; width: 60px;">
    <img src="{{url('/storage/assets/icons/1200px-Logo_NIKE.png')}}" style="height: 20px; width: 60px;" alt="Image" />
    --}}

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker4').datetimepicker({
                        format: 'L'
                    });
                });
            </script>
        </div>
    </div>

{{-- from store featured items --}}
<div class="__featured-items">
    <p class="text-size-6">Featured Footwear</p>
</div>
<!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper row-cols-1 row-cols-lg-3">
        <div class="swiper-slide card border-0 rounded-0">
            <div class="card border-0">
                <img class="img-responsive" src="{{url('/storage/assets/images/air-jordan-1-mid.jpg')}}"
                    style="width: 100%;height: 400px;object-fit: cover;">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-8 col-md-9">
                            <div class="text-left">
                                <p class="card-title">Nike Air Jordan 1</p>
                                <p class="card-text text-muted">Men's Basketball Shoes</p>
                                <p class="card-text text-muted text-size-12">4 color</p>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="text-right">
                                <p class="card-text text-muted text-size-12">$149</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide card border-0 rounded-0">
            <div class="card border-0">
                <img class="img-responsive"
                    src="{{url('/storage/assets/images/air-monarch-iv-lifestyle-gym-shoe.jpg')}}"
                    style="width: 100%;height: 400px;object-fit: cover;">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-8 col-md-9">
                            <div class="text-left">
                                <p class="card-title">Nike Air Monarch IV</p>
                                <p class="card-text text-muted">Men's Gym Shoes</p>
                                <p class="card-text text-muted text-size-12">4 color</p>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="text-right">
                                <p class="card-text text-muted text-size-12">$149</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide card border-0 rounded-0">
            <div class="card border-0">
                <img class="img-responsive"
                    src="{{url('/storage/assets/images/epic-react-flyknit-2-running-shoe.jpg')}}"
                    style="width: 100%;height: 400px;object-fit: cover;">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-8 col-md-9">
                            <div class="text-left">
                                <p class="card-title">Nike React Flyknit 2</p>
                                <p class="card-text text-muted">Men's Running Shoes</p>
                                <p class="card-text text-muted text-size-12">4 color</p>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="text-right">
                                <p class="card-text text-muted text-size-12">$149</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide card border-0 rounded-0">
            <div class="card border-0">
                <img class="img-responsive" src="{{url('/storage/assets/images/joyride-run-flyknit-running-shoe.jpg')}}"
                    style="width: 100%;height: 400px;object-fit: cover;">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-8 col-md-9">
                            <div class="text-left">
                                <p class="card-title">Nike Joyride Flyknit</p>
                                <p class="card-text text-muted">Men's Running Shoes</p>
                                <p class="card-text text-muted text-size-12">4 color</p>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="text-right">
                                <p class="card-text text-muted text-size-12">$149</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide card border-0 rounded-0">
            <div class="card border-0">
                <img class="img-responsive" src="{{url('/storage/assets/images/joyride-run-flyknit-running-shoe.jpg')}}"
                    style="width: 100%;height: 400px;object-fit: cover;">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-8 col-md-9">
                            <div class="text-left">
                                <p class="card-title">Nike Joyride Flyknit</p>
                                <p class="card-text text-muted">Men's Running Shoes</p>
                                <p class="card-text text-muted text-size-12">4 color</p>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="text-right">
                                <p class="card-text text-muted text-size-12">$149</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide card border-0 rounded-0">
            <div class="card border-0">
                <img class="img-responsive" src="{{url('/storage/assets/images/joyride-run-flyknit-running-shoe.jpg')}}"
                    style="width: 100%;height: 400px;object-fit: cover;">
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col-8 col-md-9">
                            <div class="text-left">
                                <p class="card-title">Nike Joyride Flyknit</p>
                                <p class="card-text text-muted">Men's Running Shoes</p>
                                <p class="card-text text-muted text-size-12">4 color</p>
                            </div>
                        </div>
                        <div class="col-4 col-md-3">
                            <div class="text-right">
                                <p class="card-text text-muted text-size-12">$149</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


<div class="mr-0">
    <ul class="nav nav-pills text-center">
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <button class="btn btn-outline-transparent icon-user rounded-0 my-2" type="button"
                data-toggle="modal" data-target="#loginModal"></button>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <button class="btn btn-outline-transparent icon-user-filled rounded-0 my-2" type="button"
                id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                v-pre></button>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest
        {{-- <button class="btn btn-outline-transparent icon-user rounded-0 my-2" type="button" data-toggle="modal"
        data-target="#loginModal"></button> --}}
        <li class="nav-item dropdown">

            <a href="#" class="btn btn-outline-transparent icon-question rounded-0 my-2" type="button"></a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="btn btn-outline-transparent icon-cart rounded-0 my-2" type="button"></a>
        </li>
    </ul>
