@extends('dashboard.dashboardLayout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title">List Item</div>
            </div>
            <div class="card-body">
                <table class="table table-striped mt-3">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)

                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            @foreach($user->roles as $role)
                                <td>{{ $role->name }}</td>
                            @endforeach
                            <td>
                                <button type="button" class="btn btn-success "><i class="la la-edit"></i></button>
                                <button type="button" class="btn btn-danger "><i class="la la-trash"></i> </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
@endsection
