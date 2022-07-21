@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Managment')])


@section('content')
    <div class=" container-fluid mt-5 ">
        <div class="row">
            <div class="card ">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon"
                        style="box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(39, 117, 176, 0.4)">
                        <i class="material-icons">dashboard</i>
                    </div>
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Users Management</h2>
                        </div>
                        <div class="pull-right">
                            {{-- <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a> --}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="user_index">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($data as  $user)
                            <tr>
                                <td>{{ $user['id']  }}</td>
                                <td>{{ $user['first_name'] }} {{ $user['last_name'] }}</td>
                                <td>{{ $user['email'] }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge badge-success">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('users.show', $user->id) }}"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!} --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>


                    {{-- {!! $data->render() !!} --}}
                </div>


            </div>
        </div>
    </div>
@endsection
