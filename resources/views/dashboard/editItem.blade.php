@extends('dashboard.dashboardLayout')

@section('content')
    <div class="container-fluid">
        <h4 class="page-title">Forms</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add Item</div>
                    </div>

                    <form action="{{route('item.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Cover Image</label>
                                <input type="file" class="form-control-file" name="cover_url" id="exampleFormControlFile1">
                            </div>

                            <div class="form-group">
                                <label for="largeInput">Company Name</label>
                                <input type="text" class="form-control form-control" name="company_name" id="defaultInput" placeholder="company name">
                            </div>
                            <div class="form-group">
                                <label for="largeInput">location</label>
                                <input type="text" class="form-control form-control" name="location" id="defaultInput" placeholder="company name">
                            </div>

                            <!--Google map-->
                        {{--                            <div id="map-container-google-2" class="z-depth-1-half map-container" style="padding: 10px">--}}
                        {{--                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d500285.77525587456!2d104.577084!3d11.5889006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513dc76a6be3%3A0x9c010ee85ab525bb!2sPhnom%20Penh!5e0!3m2!1sen!2skh!4v1596556045866!5m2!1sen!2skh" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
                        {{--                            </div>--}}

                        <!--Google Maps-->

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="enter your email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label for="comment">Descriptions</label>
                                <textarea class="form-control" name="description" id="comment" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="largeInput">Phone Number</label>
                                <input type="text" class="form-control form-control" name="phone_number" id="defaultInput" placeholder="phone number">
                            </div>
                        </div>

                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
@endsection
