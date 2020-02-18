@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Product Category details</h2>
        </div>
    </div>
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-secondary rounded-0" href="{{ route('productcategories.index') }}">Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category ID:</strong>
            {{ $productcategory->id }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $productcategory->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Type:</strong>
            {{ $productcategory->producttype_id }} : {{ $productcategory->type->name }} {{-- fetch function from Product class --}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Created at:</strong>
            {{ $productcategory->created_at }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Updated at:</strong>
            {{ $productcategory->updated_at }}
        </div>
    </div>
</div>
@endsection
