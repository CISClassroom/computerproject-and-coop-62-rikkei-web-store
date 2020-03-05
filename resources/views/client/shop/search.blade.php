@extends('client.layouts.app')

@section('content')
<div class="mt-5">
    <div class="mx-5 outerspace">
        {{-- filternav --}}
        @include('client.shop.components.filternav')

        <div class="row row-cols-1" style="display: flex;">
            {{-- filterbar --}}
            @include('client.shop.components.filterbar')

            <div class="__product-column mx-3" style="flex: 1;">
                <div class="mt-5">

                    {{-- featured items here --}}

                    {{-- item section --}}
                    <div class="__normal-items mt-5">
                        <div class="card-group">
                            <div class="row row-cols-2 row-cols-md-3">

                                {{-- item card --}}
                                @foreach ($products as $product)
                                @php
                                    $discountedPercent = $product->promotions
                                        ->where('start_at', '<=', $now )
                                        ->where('end_at', '>=', $now)->first();
                                    $discountedPercent = $discountedPercent ? $discountedPercent->discount_percent : 0;
                                    $discountedPrice = (($product->price) / 100) * ($discountedPercent);
                                    $finalPrice = ($product->price) - ($discountedPrice);
                                @endphp
                                <div class="col-md-4">
                                    <a class="text-decoration-none" href="{{ route('shop.show',$product->id) }}">
                                        <div class="card border-0">
                                            <div class="img-wrapper">
                                                <img class="img-responsive" src="{{ $product->image_url }}"
                                                    style="width: 100%; max-height: 400px; height: 400px; object-fit: cover;">
                                                <div class="img-overlay">
                                                    @if ($discountedPercent != 0)
                                                    <p class="text-light badge badge-pill badge-danger font-weight-bold text-size-8 text-nowrap"
                                                        style="margin-top: 15%;">
                                                        -{{ $discountedPercent }}%
                                                    </p>
                                                    @endif
                                            </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row row-cols-1 row-cols-md-2">
                                                    <div class="col-md-8">
                                                        <div class="product-title text-left">
                                                            <p class="card-title text-dark">{{ $product->name }}</p>
                                                        </div>
                                                        {{-- for show category --}}
                                                        <div class="product-subtitle text-left">
                                                            <p class="card-text text-muted">
                                                                {{ $product->category->name }}
                                                            </p>
                                                        </div>
                                                        <div class="product-color text-left">
                                                            <p class="card-text text-muted text-nowrap">
                                                                {{ __('4 colors') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="product-price text-right">
                                                            <div class="card-text text-muted text-nowrap" id="oldPrice">
                                                                @if ($discountedPercent != 0)
                                                                    <del>
                                                                @endif
                                                                    @currency($fullprice = $product->price)
                                                                @if ($discountedPercent != 0)
                                                                    </del>
                                                                @endif
                                                            </div>
                                                            <div class="card-text text-danger text-nowrap" id="newPrice">
                                                                <input type="hidden" value="@currency($discountedPrice)">
                                                                @if ($discountedPercent != 0)
                                                                    <label for="newPrice">@currency($finalPrice)</label>
                                                                @endif
                                                            </div>
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
