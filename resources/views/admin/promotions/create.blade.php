@extends('admin.layouts.app')


@section('content')

<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Add New Promotion</h2>
        </div>
    </div>
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-secondary rounded-0" href="{{ route('promotions.index') }}">Back</a>
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

{!! Form::open(array('route' => 'promotions.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}

@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea type="textarea" name="description" class="form-control" value="{{ old('description') }}" placeholder="Description"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Discount (Percent):</strong>
            <input type="number" name="discount_percent" class="form-control" value="{{ old('discount_percent') }}" placeholder="Discount (Percent)" min="0" max="100">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Max discount:</strong>
            <input type="text" name="max_discount" class="form-control" id="currencyField" value="{{ old('max_discount') }}" placeholder="Max discount">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Min Purchase:</strong>
            <input type="text" name="min_purchase" class="form-control" id="currencyField" value="{{ old('min_purchase') }}" placeholder="Min Purchase">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Start at:</strong>
            <input type="text" name="start_at" class="form-control datepicker" value="{{ old('start_at') }}" placeholder="Start at" autocomplete="off">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>End at:</strong>
            <input type="text" name="end_at" class="form-control datepicker2" value="{{ old('end_at') }}" placeholder="End at" autocomplete="off">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Related Event:</strong>
            {{-- {!! Form::select('event_id', $eventList,[], array('class' => 'form-control','custom-select')) !!} --}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <strong class="mb-3">Related products:</strong>
        <div class="form-group">
            @foreach($products as $product)
            <div class="custom-control custom-checkbox">
            {!! Form::checkbox('product_id[]', $product->id,null, array('class' =>'custom-control-input','id' => 'customRoleCheckbox'.$product->id)) !!}
                <label class="custom-control-label" for="customRoleCheckbox{{ $product->id }}">
                    <img src="/{{ $product->image_url }}" alt="product picture" style="width: 30px; height: 30px;">
                    {{ $product->name }}
                </label>
            </div>
            <br />
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center my-3">
        <button type="submit" class="btn btn-success rounded-0">Submit</button>
    </div>
</div>

{!! Form::close() !!}

@endsection
