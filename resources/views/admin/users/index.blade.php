@extends('admin.layouts.app')


@section('content')
<div class="row mb-3">
    <div class="col-8 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
    </div>
    @can('user-create')
    <div class="col">
        <div class="pull-right text-right">
            <a class="btn btn-primary rounded-0" href="{{ route('users.create') }}">Create New User</a>
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
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>
        <th width="230px">Action</th>
    </tr>
    @foreach ($data as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
            @endif
        </td>
        <td>
            @can('user-list')
            <a class="btn btn-info rounded-0" href="{{ route('users.show',$user->id) }}">Show</a>
            @endcan
            @can('user-edit')
            <a class="btn btn-warning rounded-0" href="{{ route('users.edit',$user->id) }}">Edit</a>
            @endcan
            @can('user-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline',
            'onclick' => "return confirm('Are you sure you want to delete this item? This action can not be undone.')"
            ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger rounded-0']) !!}
            {!! Form::close() !!}
            {{-- <a class="btn btn-danger rounded-0" href="#" data-toggle="modal" data-target="#deleteModalCenter">Delete</a> --}}
            @endcan
        </td>
    </tr>
    @endforeach
</table>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLongTitle">Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <span class="font-weight-bold">Are you sure you want to delete this data?</span>
                <p class="text-danger font-weight-bold">This action can not be undone</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-danger rounded-0">Delete</button> --}}
                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline'])
                !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger rounded-0']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

{!! $data->render() !!}

@endsection
