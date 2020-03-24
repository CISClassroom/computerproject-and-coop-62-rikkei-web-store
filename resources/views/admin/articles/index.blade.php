@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Articles Management</h2>
        </div>
    </div>
    @can('article-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('articles.create') }}">Create New article</a>
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
            <th>Title</th>
            <th>Image</th>
            <th>Detail</th>
            <th>Category</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th width="230px">Action</th>
        </tr>
    </thead>
    @foreach ($articles as $article)
    <tr>
        <td class="font-weight-bold">{{ ++$i }}</td>
        <td>{{ $article->id }}</td>
        <td>{{ $article->title }}</td>
        <td><img src="{{ url($article->image_url) }}" alt="article picture" style="width: 100px; height: 100px;"></td>
        {{-- <td>{{ $article->image_url }}</td> --}}
        <td>{{ $article->detail }}</td>
        <td>{{ $article->category->name }}</td>
        <td>{{ $article->created_at }}</td>
        <td>{{ $article->updated_at }}</td>
        <td>
            <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                @can('article-list')
                <a class="btn btn-info rounded-0" href="{{ route('articles.show',$article->id) }}">Show</a>
                @endcan
                @can('article-edit')
                <a class="btn btn-warning rounded-0" href="{{ route('articles.edit',$article->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('article-delete')
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


{!! $articles->links() !!}

@endsection
