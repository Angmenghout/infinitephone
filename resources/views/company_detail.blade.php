@extends('layouts.app')

@section('content')
    <div class="container">
        {{--cover--}}
        <div class="cover">
            <img src="{{url('img/media', $companiesItemDetail->image)}}" height="600" width="600" alt="{{ $companiesItemDetail->image }}">
        </div>
        {{--cover--}}
        <div class="company-name" name="company-name" style="text-align: center ; padding: 50px">
            <h1>{{ $companiesItemDetail->name }}</h1>
        </div>
        <!--Google map-->
        <div id="map-container-google-3" class="z-depth-1-half map-container" style="padding: 20px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d500285.77525587456!2d104.577084!3d11.5889006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513dc76a6be3%3A0x9c010ee85ab525bb!2sPhnom%20Penh!5e0!3m2!1sen!2skh!4v1596556045866!5m2!1sen!2skh" frameborder="0" style="border:0; width: 1200px; height: 400px " allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!--Google Maps-->
        {{--description--}}
        <div class="description" name="description" style="text-align: left; padding: 20px">
            <p>{{ $companiesItemDetail->description }}</p>
        </div>
        {{--description--}}
        <div class="phone-number" name="phone-number" style="text-align: left; padding-left: 20px; padding-top: 0px">
            <p>Phone Number : {{ $companiesItemDetail->phone }}</p>
        </div>
        <div class="location" name="location" style="text-align: left; padding-left: 20px; padding-top: 0px">
            <a href="https://goo.gl/maps/7e3dTgoPAUkV2SeQ8">{{ $companiesItemDetail->location }}</a>
        </div>

    </div>
    @endsection
