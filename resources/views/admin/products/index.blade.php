@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2>Products Management</h2>
        </div>
    </div>
    @can('product-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('products.create') }}">Create New Product</a>
        </div>
    </div>
    @endcan
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Name</th>
        <th>Code</th>
        <th>Picture</th>
        <th>Details</th>
        <th width="230px">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->code }}</td>
        <td><img src="{{ url($product->image_url) }}" alt="product picture" style="width: 100px; height: 100px;"></td>
        {{-- <td>{{ $product->image_url }}</td> --}}
        <td>{{ $product->detail }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                @can('product-list')
                <a class="btn btn-info rounded-0" href="{{ route('products.show',$product->id) }}">Show</a>
                @endcan
                @can('product-edit')
                <a class="btn btn-warning rounded-0" href="{{ route('products.edit',$product->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('product-delete')
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


{!! $products->links() !!}

@endsection
