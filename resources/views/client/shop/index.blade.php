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
                                <div class="col-md-4">
                                    <a class="text-decoration-none" href="{{ route('shop.show',$product->id) }}">
                                        <div class="card border-0">
                                            <div class="img-wrapper">
                                                <img class="img-responsive" src="{{ $product->image_url }}"
                                                style="width: 100%; max-height: 400px; height: 400px; object-fit: cover;">
                                                <div class="img-overlay">
                                                    <p class="text-light badge badge-pill badge-danger font-weight-bold text-size-8 text-nowrap"
                                                    style="margin-top: 20%;">
                                                        -00%
                                                    </p>
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
                                                                {{ $product->category->name }}</p>
                                                        </div>
                                                        <div class="product-color text-left">
                                                            <p class="card-text text-muted text-nowrap">
                                                                {{ __('4 colors') }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="product-price text-right">
                                                            <div class="card-text text-muted text-nowrap" id="oldPrice">
                                                                @foreach($promotions as $promotion)
                                                                    @foreach($promotion->products as $productItem)
                                                                        @if ($product->id === $productItem->id)
                                                                        <del>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                                @currency($finalprice = $product->price)
                                                                @foreach($promotions as $promotion)
                                                                    @foreach($promotion->products as $productItem)
                                                                        @if ($product->id === $productItem->id)
                                                                        </del>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            </div>
                                                            {{-- @php
                                                            $tableData = DB::table('promotion_products')
                                                            ->join('products', 'products.id', '=', 'promotion_products.product_id')
                                                            ->join('promotions', 'promotions.id', '=', 'promotion_products.promotion_id')
                                                            ->where('promotions.id', '=', 35)
                                                            ->get();
                                                            @endphp
                                                            @foreach($tableData as $data)
                                                            {{ dd($data->id) }}
                                                            @if ($product->id === $data->id)
                                                            <input type="hidden"
                                                                value="@currency($discounted = (($product->price)/100)*($promotion->discount_percent))">
                                                            <label for="oldPrice">@currency($discountedprice =
                                                                ($product->price)-($discounted))</label>
                                                            @endif
                                                            @endforeach --}}
                                                            @foreach($promotions as $promotion)
                                                            @foreach($promotion->products as $productItem)
                                                            @if ($product->id === $productItem->id)
                                                            {{-- {{ $productItem->id }}-{{ $promotion->id}}-{{ $productItem->price }}:{{ $promotion->discount_percent }}<br>
                                                            --}}
                                                            <div class="card-text text-danger text-nowrap"
                                                                id="newPrice">
                                                                <input type="hidden"
                                                                    value="@currency($discounted = (($product->price)/100)*($promotion->discount_percent))">
                                                                <label for="newPrice">@currency($finalprice =
                                                                    ($product->price)-($discounted))</label>
                                                            </div>
                                                            @endif
                                                            @endforeach
                                                            @endforeach

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
