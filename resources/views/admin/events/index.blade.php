@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Promotions Management</h2>
        </div>
    </div>
    @can('promotion-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('promotions.create') }}">Create New Promotion</a>
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
            <th>Description</th>
            <th>Discount</th>
            <th>Max discount</th>
            <th>Min purchase</th>
            <th>Start at</th>
            <th>End at</th>
            <th>Created at</th>
            {{-- <th>Related Event</th> --}}
            <th width="230px">Action</th>
        </tr>
    </thead>
    @foreach ($promotions as $promotion)
    <tr>
        <td class="font-weight-bold">{{ ++$i }}</td>
        <td>{{ $promotion->id }}</td>
        <td>{{ $promotion->title }}</td>
        <td>{{ $promotion->description }}</td>
        <td class="text-right">{{ $promotion->discount_percent }}%</td>
        <td class="text-right">{{ $promotion->max_discount }}</td>
        <td class="text-right">{{ $promotion->min_purchase }}</td>
        <td>{{ $promotion->start_at }}</td>
        <td>{{ $promotion->end_at }}</td>
        <td>{{ $promotion->created_at }}</td>
        {{-- <td>{{ $promotion->event_id }}</td> --}}
        <td>
            <form action="{{ route('promotions.destroy',$promotion->id) }}" method="POST">
                @can('promotion-list')
                <a class="btn btn-info rounded-0" href="{{ route('promotions.show',$promotion->id) }}">Show</a>
                @endcan
                @can('promotion-edit')
                <a class="btn btn-warning rounded-0" href="{{ route('promotions.edit',$promotion->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('promotion-delete')
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


{!! $promotions->links() !!}

@endsection
