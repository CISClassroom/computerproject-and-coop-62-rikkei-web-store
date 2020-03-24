@extends('admin.layouts.app')


@section('content')

<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Add New Article</h2>
        </div>
    </div>
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-secondary rounded-0" href="{{ route('articles.index') }}">Back</a>
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

{!! Form::open(array('route' => 'articles.store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'files' => true)) !!}

{{-- <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data"> --}}
@csrf
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Subject(For newsletter subscriber):</strong>
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
            <strong>Detail:</strong>
            <textarea class="form-control" style="height:150px" name="detail" value="{{ old('detail') }}" placeholder="Detail"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category:</strong>
            {!! Form::select('articlecategory_id', $articleCategoriesList,[], array('class' =>
            'form-control','custom-select')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
        <button type="submit" class="btn btn-success rounded-0">Submit</button>
    </div>
</div>

{{-- </form> --}}
{!! Form::close() !!}

@endsection
