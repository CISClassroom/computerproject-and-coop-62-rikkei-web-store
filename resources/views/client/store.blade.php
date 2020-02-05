@extends('client.layouts.app')

@section('content')
<div class="mt-5">
    <div class="mx-5 outerspace">
        <div class="row">
            <div class="col">
                <div class="mt-5">
                    <div class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
                        <div class="__text-title">
                            <p class="text-size-6">Men's Shoes</p>
                        </div>
                        <div class="nav-item">
                            <button class="btn btn-outline-dark border-0" type="button" data-toggle="collapse"
                                data-target="#collapseSortbar" aria-expanded="false" aria-controls="collapseSortbar"
                                aria-label="Toggle navigation">
                                data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1" style="display: flex;">
            <div class="col-2 show" id="collapseSortbar">
                <div class="mt-5" id="sortbarToggler" aria-expanded="true">
                    {{-- <div class="collapse navbar-collapse" id="sortbarToggler" aria-expanded="true"> --}}
                    <div id="accordion">
                        <div class="card border-0 rounded-0">
                            <div class="card-header border-0" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-decoration-none active" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Item #1
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                <div class="card-body">
                                    VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 rounded-0">
                            <div class="card-header border-0" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-decoration-none" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Item #2
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                                <div class="card-body">
                                    Anim.
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 rounded-0">
                            <div class="card-header border-0" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link text-decoration-none" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Item #3
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                                <div class="card-body">
                                    richardson ad squid.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="__product-column mx-3" style="flex: 1;">
                <div class="mt-5">

                    {{-- featured items here --}}

                    {{-- item section --}}
                    <div class="__normal-items mt-5">
                        <div class="row row-cols-2 row-cols-md-3">

                            {{-- item card --}}
                            <div class="col-md-4">
                                <a class="text-decoration-none" href="#">
                                    <div class="card border-0">
                                        <img class="img-responsive"
                                            src="{{url('/storage/assets/images/air-jordan-1-mid.jpg')}}"
                                            style="width: 100%;height: 100%;object-fit: contain;">
                                        <div class="card-body">
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col-md-8">
                                                    <div class="product-title text-left">
                                                        <p class="card-title text-dark">Nike Air Jordan 1</p>
                                                    </div>
                                                    <div class="product-subtitle text-left">
                                                        <p class="card-text text-muted">Men's Basketball Shoes</p>
                                                    </div>
                                                    <div class="product-color text-left">
                                                        <p class="card-text text-muted text-nowrap">4 colors</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="product-price text-right">
                                                        <p class="card-text text-muted text-nowrap">$149</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                            {{-- item card --}}
                            <div class="col-md-4">
                                <a class="text-decoration-none" href="#">
                                    <div class="card border-0">
                                        <img class="img-responsive"
                                            src="{{url('/storage/assets/images/air-jordan-1-mid.jpg')}}"
                                            style="width: 100%;height: 100%;object-fit: contain;">
                                        <div class="card-body">
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col-md-8">
                                                    <div class="product-title text-left">
                                                        <p class="card-title text-dark">Nike Air Jordan 1</p>
                                                    </div>
                                                    <div class="product-subtitle text-left">
                                                        <p class="card-text text-muted">Men's Basketball Shoes</p>
                                                    </div>
                                                    <div class="product-color text-left">
                                                        <p class="card-text text-muted text-nowrap">4 colors</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="product-price text-right">
                                                        <p class="card-text text-muted text-nowrap">$149</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{-- item card --}}
                            <div class="col-md-4">
                                <a class="text-decoration-none" href="#">
                                    <div class="card border-0">
                                        <img class="img-responsive"
                                            src="{{url('/storage/assets/images/air-jordan-1-mid.jpg')}}"
                                            style="width: 100%;height: 100%;object-fit: contain;">
                                        <div class="card-body">
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col-md-8">
                                                    <div class="product-title text-left">
                                                        <p class="card-title text-dark">Nike Air Jordan 1</p>
                                                    </div>
                                                    <div class="product-subtitle text-left">
                                                        <p class="card-text text-muted">Men's Basketball Shoes</p>
                                                    </div>
                                                    <div class="product-color text-left">
                                                        <p class="card-text text-muted text-nowrap">4 colors</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="product-price text-right">
                                                        <p class="card-text text-muted text-nowrap">$149</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            {{-- item card --}}
                            <div class="col-md-4">
                                <a class="text-decoration-none" href="#">
                                    <div class="card border-0">
                                        <img class="img-responsive"
                                            src="{{url('/storage/assets/images/air-jordan-1-mid.jpg')}}"
                                            style="width: 100%;height: 100%;object-fit: contain;">
                                        <div class="card-body">
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col-md-8">
                                                    <div class="product-title text-left">
                                                        <p class="card-title text-dark">Nike Air Jordan 1</p>
                                                    </div>
                                                    <div class="product-subtitle text-left">
                                                        <p class="card-text text-muted">Men's Basketball Shoes</p>
                                                    </div>
                                                    <div class="product-color text-left">
                                                        <p class="card-text text-muted text-nowrap">4 colors</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="product-price text-right">
                                                        <p class="card-text text-muted text-nowrap">$149</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
