@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Product details</h2>
        </div>
    </div>
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-secondary rounded-0" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Product ID:</strong>
            {{ $product->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Code:</strong>
            {{ $product->code }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            {{ $product->price }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Type:</strong>
            {{ $product->producttype_id }} : {{ $product->type->name }} {{-- fetch function from Product class --}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category:</strong>
            {{ $product->productcategory_id }} : {{ $product->category->name }} {{-- fetch function from Product class --}}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Created at:</strong>
            {{ $product->created_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Updated at:</strong>
            {{ $product->updated_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image path:</strong>
            {{ $product->image_url }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong></strong>
            <img src="{{ url($product->image_url) }}" alt="product picture" style="width: 200px; height: 200px;">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $product->detail }}
        </div>
    </div>

</div>
@endsection
