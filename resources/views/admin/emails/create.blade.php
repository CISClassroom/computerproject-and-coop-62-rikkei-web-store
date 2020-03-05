@extends('admin.layouts.app')


@section('content')

<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Newsletter</h2>
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

{!! Form::open(array('route' => 'mails.store','method'=>'POST','enctype'=>'multipart/form-data')) !!}
@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Subject:</strong>
            <input type="text" name="subject" class="form-control" value="{{ old('subject') }}" placeholder="Subject">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Image:</strong>
        <div class="form-group custom-file">
            <strong>Image:</strong>
            <input type="file" name="image_url" class="form-control custom-file-input" id="customFile"
            value="{{ old('image_url') }}" placeholder="Image">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Message:</strong>
            <textarea name="message" class="form-control" value="{{ old('message') }}" placeholder="Enter your message here"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Url:</strong>
            <input type="text" name="url" class="form-control" value="{{ old('url') }}" placeholder="Url">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Button Color:</strong>
            <select class="form-control" name="color" id="ButtonColorSelect" value="{{ old('color') }}" placeholder="Button Color">
                <option value="primary">Dark</option>
                <option value="secondary">Gray</option>
                <option value="danger">Red</option>
                <option value="warning">Yellow</option>
                <option value="success">Green</option>
              </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Button text:</strong>
            <input type="text" name="buttonText" class="form-control" value="{{ old('buttonText') }}" placeholder="Button text">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success rounded-0">Submit</button>
    </div>
</div>

{!! Form::close() !!}

@endsection
