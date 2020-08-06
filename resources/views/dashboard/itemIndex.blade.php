@extends('dashboard.dashboardLayout')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title">List Item</div>
            </div>
            <div class="card-body">
               @if($companies->count() !== 0)
                    <table class="table table-striped mt-3">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Descriptions</th>
                            <th scope="col">Email</th>
                            <th scope="col">PhoneNumber</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($companies as $company)

                            <tr>
                                <td>{{$company->id}}</td>
                                <td><img src="{{url('img/media', $company->image)}}" alt="{{ $company->image }}" height="70px" width="70px"></td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->location}}</td>
                                <td>{{$company->description}}</td>
                                <td>{{$company->email}}</td>
                                <td>{{$company->phone}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary "><i class="la la-eye"></i></button>
                                    <button type="button" class="btn btn-success "><i class="la la-edit"></i></button>
                                    <button type="button" class="btn btn-danger "><i class="la la-trash"></i> </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                   @else
                   <div class="d-flex justify-content-center">
                       Empty List !!!!
                   </div>
                @endif
            <div>
        <div>
@endsection