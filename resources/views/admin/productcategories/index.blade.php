@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Product categories Management</h2>
        </div>
    </div>
    @can('product-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('productcategories.create') }}">Create New Product
                Category</a>
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
    @foreach ($productcategories as $category)
    <tr>
        <td class="font-weight-bold">{{ ++$i }}</td>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>
            <form action="{{ route('productcategories.destroy',$category->id) }}" method="POST">
                @can('productcategory-list')
                <a class="btn btn-info rounded-0" href="{{ route('productcategories.show',$category->id) }}">Show</a>
                @endcan
                @can('productcategory-edit')
                <a class="btn btn-warning rounded-0" href="{{ route('productcategories.edit',$category->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('productcategory-delete')
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


{!! $productcategories->links() !!}

@endsection
