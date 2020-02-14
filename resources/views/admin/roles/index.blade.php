@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
    </div>
    @can('role-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('roles.create') }}"> Create New Role</a>
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
        <th width="230px">Action</th>
    </tr>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->id }}</td>
        <td>{{ $role->name }}</td>
        <td>
            @can('role-list')
            <a class="btn btn-info rounded-0" href="{{ route('roles.show',$role->id) }}">Show</a>
            @endcan
            @can('role-edit')
            <a class="btn btn-warning rounded-0" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
            $role->id], 'style'=>'display:inline',
            'onclick' => "return confirm('Are you sure you want to delete this item? This action can not be undone.')"
            ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger rounded-0']) !!}
            {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}

@endsection
