
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<div class="container">
    <br><br><br>
    <div class="container-fluid">
        <div class="card-body">
            <h4 class="page-title">Company Detail</h4>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td>ID Number</td>
                        <td>{{ $item->id }}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td> <img src="{{url('img/media', $item->image)}}" alt="{{$item->image}}" height="70px" width="70px"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{ $item->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{ $item->description }}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{ $item->phone }}</td>
                    </tr>
                    <tr>
                        <td>Location</td>
                        <td>{{ $item->locaiton }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br><br>
</div>

