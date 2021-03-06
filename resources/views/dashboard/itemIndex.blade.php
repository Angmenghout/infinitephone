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
                            <th scope="col">Email</th>
                            <th scope="col">Descriptions</th>
                            <th scope="col">PhoneNumber</th>
                            <th scope="col">Location</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($companies as $company)

                            <tr>
                                <td>{{$company->id}}</td>
                                <td><img src="{{url('img/media', $company->image)}}" alt="{{ $company->image }}" height="70px" width="70px"></td>
                                <td>{{$company->name}}</td>
                                <td>{{$company->email}}</td>
                                <td>{{$company->description}}</td>
                                <td>{{$company->phone}}</td>
                                <td>{{$company->location}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary">
                                       <a href="{{route('item.show', $company->id)}}" style="color: white; text-decoration: none">
                                           <i class="la la-eye"></i>
                                       </a>
                                    </button>
                                    <button type="button" class="btn btn-success ">
                                        <a href="{{route('item.edit',$company->id)}}" style="color: white;text-decoration: none">
                                            <i class="la la-edit"></i>
                                        </a>
                                    </button>

                                    <form id="form-delete" method="post" action="{{route('item.destroy', $company->id)}}" style="display: inline ">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <button type="button" class="btn btn-danger">
                                            <a style="color: white; text-decoration: none" href="#" onclick="document.getElementById('form-delete').submit()">
                                                <i class="la la-trash"></i>
                                            </a>
                                        </button>
                                    </form>
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
