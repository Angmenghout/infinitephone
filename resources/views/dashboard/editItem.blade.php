<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<div class="container">
    <br><br><br>
    <div class="container-fluid">
        <h4 class="page-title">Forms</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add Item</div>
                    </div>

                    <form action="{{url('/item/editItem',$companies->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group{{$errors->has('name')?' has-error':''}}">
                                <label for="largeInput">Company Name</label>
                                <input type="text" class="form-control form-control" id="name" name="name" value="{{$companies->name}}">
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('email')?' has-error':''}}">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="enter your Email" value="{{$companies->email}}" >
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('phone')?' has-error':''}}">
                                <label for="largeInput">Phone Number</label>
                                <input type="text" class="form-control form-control" name="phone" id="phone" value="{{$companies->phone}}">
                                <span class="text-danger">{{$errors->first('phone')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('location')?' has-error':''}}">
                                <label for="largeInput">location</label>
                                <input type="text" class="form-control form-control" name="location" id="location" value="{{$companies->location}}">
                                <span class="text-danger">{{$errors->first('location')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('description')?' has-error':''}}">
                                <label for="comment">Descriptions</label>
                                <textarea class="form-control" name="description" id="description" rows="5"
                                          value="{{$companies->description}}"></textarea>
                                <span class="text-danger">{{$errors->first('description')}}</span>
                            </div>

                            <div class="form-group{{$errors->has('image')?' has-error':''}}">
                                <label for="exampleFormControlFile1">Old Cover Image</label>
                                <input type="hidden" class="form-control-file"
                                       value="{{$companies->image}}" style="width: 80px ; height: 80px"
                                >
                            </div>

                            <div class="form-group{{$errors->has('image')?' has-error':''}}">
                                <label for="exampleFormControlFile1">Cover Image</label>
                                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            </div>

                            <div class="card-action">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button class="btn btn-danger">Cancel</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</div>
