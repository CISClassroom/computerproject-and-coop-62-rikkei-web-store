@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Promotion details</h2>
        </div>
    </div>
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-secondary rounded-0" href="{{ route('promotions.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>promotion ID:</strong>
            {{ $promotion->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            {{ $promotion->title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            {{ $promotion->description }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Discount:</strong>
            {{ $promotion->discount_percent }}%
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Max discount:</strong>
            @currency($promotion->max_discount)
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Min purchase:</strong>
            @currency($promotion->min_purchase)
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Start at:</strong>
            {{ $promotion->start_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>End at:</strong>
            {{ $promotion->end_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Created at:</strong>
            {{ $promotion->created_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Updated at:</strong>
            {{ $promotion->updated_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Related event:</strong>
            {{-- {{ $promotion->event_id }} : {{ $promotion->event->title }} --}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Related product:</strong><br>
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th style="white-space: nowrap; width: 1%;">No</th>
                        <th style="white-space: nowrap; width: 1%;">ID</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th style="white-space: nowrap; width: 1%;">Picture</th>
                        <th style="white-space: nowrap; width: 1%;">Full price</th>
                        <th style="white-space: nowrap; width: 1%;">Discounted</th>
                        <th style="white-space: nowrap; width: 1%;">Final Price</th>

                    </tr>
                </thead>
                @foreach($promotion->products as $product)
            {{-- {{ $product->id }}: {{ $product->name }}<br> --}}
                <tr>
                    <td class="font-weight-bold">{{ ++$i }}</td>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->code }}</td>
                    <td><img src="{{ url($product->image_url) }}" alt="product picture" style="width: 60px; height: 60px;"></td>
                    <td>{{ $product->price }}</td>
                    <td>@currency($discounted = (($product->price)/100)*($promotion->discount_percent))</td>
                    <td>@currency($discountedprice = ($product->price)-($discounted))</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
