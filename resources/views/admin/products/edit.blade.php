@extends('admin.layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Edit Product</h2>
        </div>
    </div>
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-secondary rounded-0" href="{{ route('products.index') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                <input type="text" name="code" value="{{ $product->code }}" class="form-control" placeholder="Code">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price"
                    data-type="currency">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type:</strong>
                {!! Form::select('producttype_id', $productTypesList, $product->type->id,
                array('class' => 'form-control','custom-select')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Category:</strong>
                {!! Form::select('productcategory_id', $productCategoriesList, $product->category->id,
                array('class' => 'form-control','custom-select')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Image:</strong>
            <div class="form-group custom-file">
                <strong>Image:</strong>
                <input type="file" name="image_url" value="{{ $product->image_url }}"
                    class="form-control custom-file-input" id="customFile" placeholder="Image">
                <label class="custom-file-label" for="customFile">{{ $product->image_url }}</label>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail"
                    placeholder="Detail">{{ $product->detail }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success rounded-0">Submit</button>
        </div>
    </div>
</form>

@endsection
