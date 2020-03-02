@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2 class="text-uppercase">Order details</h2>
        </div>
    </div>
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-secondary rounded-0" href="{{ route('orders.index') }}">Back</a>
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


<form action="{{ route('orders.update',$order->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>order ID:</strong>
                        {{ $order->id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User ID:</strong>
                        {{ $order->user_id }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Username:</strong>
                        {{ $order->user->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Delivery address:</strong><br>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                {{ $order->address->name }} <br>
                                {{ $order->address->addressline1 }}, <br>
                                {{ $order->address->addressline2 }}, <br>
                                {{ $order->address->city }}, {{ $order->address->country }} <br>
                                {{ $order->address->zipcode }} <br>
                                {{ __('Phonenumber') }}: {{ $order->address->phonenumber }} <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Subtotal:</strong>
                        @currency($order->subtotal)
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Shipping:</strong>
                        @currency($order->shipping)
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Discount:</strong>
                        -@currency($order->discount)
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Total:</strong>
                        @currency($order->sumtotal)
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Payment option:</strong>
                        {{ $order->paymentoption }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Order placed at:</strong>
                        {{ $order->created_at }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Order updated at:</strong>
                        {{ $order->updated_at }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status:</strong>
                        @if($order->orderstatus->id == 1)
                        <label class="badge badge-pill badge-secondary">{{ $order->orderstatus->name }}</label>
                        @elseif($order->orderstatus->id == 2)
                        <label class="badge badge-pill badge-warning">{{ $order->orderstatus->name }}</label>
                        @elseif($order->orderstatus->id == 3)
                        <label class="badge badge-pill badge-primary">{{ $order->orderstatus->name }}</label>
                        @elseif($order->orderstatus->id == 4)
                        <label class="badge badge-pill badge-success">{{ $order->orderstatus->name }}</label>
                        @endif
                        {!! Form::select('status', $orderStatusList, $order->orderstatus->id,
                        array('class' => 'form-control','custom-select','multiple')) !!}
                    </div>
                </div>
                @can('order-edit')
                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                    <button type="submit" class="btn btn-success rounded-0">Submit</button>
                </div>
                @endcan
            </div>
        </div>
    </div>
</form>
@endsection
