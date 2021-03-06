@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Product Types Management</h2>
        </div>
    </div>
    @can('product-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('producttypes.create') }}">Create New Product Type</a>
        </div>
    </div>
    @endcan
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-hover">
    <thead class="thead-light">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Name</th>
        <th width="230px">Action</th>
    </tr>
    </thead>
    @foreach ($producttypes as $type)
    <tr>
        <td class="font-weight-bold">{{ ++$i }}</td>
        <td>{{ $type->id }}</td>
        <td>{{ $type->name }}</td>
        <td>
            <form action="{{ route('producttypes.destroy',$type->id) }}" method="POST">
                @can('producttype-list')
                <a class="btn btn-info rounded-0" href="{{ route('producttypes.show',$type->id) }}">Show</a>
                @endcan
                @can('producttype-edit')
                <a class="btn btn-warning rounded-0" href="{{ route('producttypes.edit',$type->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('producttype-delete')
                <button type="submit" class="btn btn-danger rounded-0"
                    onclick="return confirm('Are you sure you want to delete this item? This action can not be undone.')">
                    Delete
                </button>
                @endcan
            </form>
        </td>
    </tr>
    @endforeach
</table>


{!! $producttypes->links() !!}

@endsection
