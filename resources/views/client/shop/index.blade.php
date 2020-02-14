@extends('client.layouts.app')

@section('content')
<div class="mt-5">
    <div class="mx-5 outerspace">
        {{-- sortnav --}}
        @include('client.shop.sortnav')

        <div class="row row-cols-1" style="display: flex;">
            {{-- sortbar --}}
            @include('client.shop.sortbar')

            <div class="__product-column mx-3" style="flex: 1;">
                <div class="mt-5">

                    {{-- featured items here --}}

                    {{-- item section --}}
                    <div class="__normal-items mt-5">
                        <div class="card-group">
                            <div class="row row-cols-2 row-cols-md-3">

                                {{-- item card --}}
                                @foreach ($products as $product)
                                <div class="col-md-4">
                                    <a class="text-decoration-none" href="/shop/{{ $product->id }}">
                                        <div class="card border-0">
                                            <img class="img-responsive" src="{{ $product->image_url }}"
                                                style="width: 100%; max-height: 400px; height: 400; object-fit: cover;">
                                            <div class="card-body">
                                                <div class="row row-cols-1 row-cols-md-2">
                                                    <div class="col-md-8">
                                                        <div class="product-title text-left">
                                                            <p class="card-title text-dark">{{ $product->name }}</p>
                                                        </div>
                                                        {{-- for show category --}}
                                                        <div class="product-subtitle text-left">
                                                            <p class="card-text text-muted">{{ $product->detail }}</p>
                                                        </div>
                                                        <div class="product-color text-left">
                                                            <p class="card-text text-muted text-nowrap">4 colors</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="product-price text-right">
                                                            <p class="card-text text-muted text-nowrap">
                                                                {{ $product->price }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
