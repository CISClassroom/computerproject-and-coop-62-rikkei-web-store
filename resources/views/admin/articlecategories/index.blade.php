@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Article categories Management</h2>
        </div>
    </div>
    @can('article-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('articlecategories.create') }}">Create New article
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
    @foreach ($articlecategories as $category)
    <tr>
        <td class="font-weight-bold">{{ ++$i }}</td>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>
            <form action="{{ route('articlecategories.destroy',$category->id) }}" method="POST">
                @can('articlecategory-list')
                <a class="btn btn-info rounded-0" href="{{ route('articlecategories.show',$category->id) }}">Show</a>
                @endcan
                @can('articlecategory-edit')
                <a class="btn btn-warning rounded-0" href="{{ route('articlecategories.edit',$category->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('articlecategory-delete')
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


{!! $articlecategories->links() !!}

@endsection
