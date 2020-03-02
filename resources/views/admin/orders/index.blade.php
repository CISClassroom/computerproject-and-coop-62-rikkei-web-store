@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Orders Management</h2>
        </div>
    </div>
    {{-- @can('product-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('products.create') }}">Create New Product</a>
        </div>
    </div>
    @endcan --}}
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-hover">
    <thead class="thead-light">
        <tr>
            <th style="white-space: nowrap; width: 1%;">No</th>
            <th>Order Date</th>
            <th style="white-space: nowrap; width: 1%;">OrderID</th>
            <th style="white-space: nowrap; width: 1%;">UserID</th>
            <th>Username</th>
            <th style="white-space: nowrap; width: 1%;">Total</th>
            <th style="white-space: nowrap; width: 1%;">Payment option</th>
            <th style="white-space: nowrap; width: 1%;">Status</th>
            <th>Delivery address</th>
            <th width="230px">Action</th>
        </tr>
    </thead>
    @foreach ($orders as $order)
    <tr>
        <td class="font-weight-bold">{{ ++$i }}</td>
        <td>{{ $order->created_at }}</td>
        <td>{{ $order->id }}</td>
        <td>{{ $order->user_id }}</td>
        <td>{{ $order->user->name }}</td>
        <td>{{ $order->sumtotal }}</td>
        <td>{{ $order->paymentoption }}</td>
        <td>
            @if($order->orderstatus->id == 1)
            <label class="badge badge-pill badge-secondary">{{ $order->orderstatus->name }}</label>
            @elseif($order->orderstatus->id == 2)
            <label class="badge badge-pill badge-warning">{{ $order->orderstatus->name }}</label>
            @elseif($order->orderstatus->id == 3)
            <label class="badge badge-pill badge-primary">{{ $order->orderstatus->name }}</label>
            @elseif($order->orderstatus->id == 4)
            <label class="badge badge-pill badge-success">{{ $order->orderstatus->name }}</label>
            @endif
        </td>
        <td>{{ Str::limit($order->address->addressline1 , 12) }}-{{ $order->address->city }}-{{ $order->address->zipcode }}</td>
        {{-- <td>{{ $product->image_url }}</td> --}}
        <td>
            <form action="{{ route('orders.destroy',$order->id) }}" method="POST">
                @can('order-list')
                <a class="btn btn-info rounded-0" href="{{ route('orders.show',$order->id) }}">Show</a>
                @endcan
                @can('order-edit')
                <a class="btn btn-warning rounded-0" href="{{ route('orders.edit',$order->id) }}">Edit</a>
                @endcan
                @csrf
                @method('DELETE')
                @can('order-delete')
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


{!! $orders->links() !!}

@endsection
