@extends('layouts.app', ['activePage' => 'role-management', 'titlePage' => __('All Roles')])

@section('content')
    <div class=" container-fluid mt-5">
        <div class="row">

            <div class="col-md-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <div class="card">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon"
                            style="box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(39, 117, 176, 0.4)">
                            <i class="material-icons">dashboard</i>
                        </div>
                        <div class="pull-left">
                            <h3>Role Management</h3>
                        </div>
                        <div class="pull-right">
                            {{-- @can('role-create') --}}
                                <a class="btn btn-info" href="{{ route('roles.create') }}"> Create New Role</a>
                            {{-- @endcan --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" id="user_index">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>

                                        <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}"><i class="fa fa-eye"></i></a>
                                        @can('role-edit')
                                            <a class="btn btn-info" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-pencil"></i></a>
                                        @endcan
                                        @can('role-delete')
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                            {{-- {!! Form::submit('Delete', ['class' => 'btn btn-info']) !!} --}}
                                            {{ Form::button('<i class="fa fa-trash"></i>', ['class' => 'btn btn-info ', 'type' => 'submit']) }}

                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>



    </div>
    {{-- <div class="container  bg-white mx-2">
<div class="row mt-5">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Role Management</h3>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif --}}


    {!! $roles->render() !!}

    {{-- </div> --}}
@endsection
