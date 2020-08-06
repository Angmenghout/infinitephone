@extends('layouts.app')

@section('content')
    <div class="container" style="margin: 0">
        {{--cover--}}
        <div class="cover">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(11).jpg">
        </div>
        {{--cover--}}
        <div class="company-name" name="company-name" style="text-align: center">
            <h1>Company Name</h1>
        </div>
        <!--Google map-->
        <div id="map-container-google-3" class="z-depth-1-half map-container" style="padding: 20px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d500285.77525587456!2d104.577084!3d11.5889006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513dc76a6be3%3A0x9c010ee85ab525bb!2sPhnom%20Penh!5e0!3m2!1sen!2skh!4v1596556045866!5m2!1sen!2skh" frameborder="0" style="border:0; width: 1000px; height: 50%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!--Google Maps-->
        {{--description--}}
        <div class="description" name="description" style="text-align: left; padding: 20px">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        {{--description--}}
        <div class="phone-number" name="phone-number" style="text-align: left; padding: 20px">
            <p>Phone Number : 0992887387</p>
        </div>
        <div class="location" name="location" style="text-align: left; padding: 20px">
            <a href="https://goo.gl/maps/7e3dTgoPAUkV2SeQ8">https://goo.gl/maps/7e3dTgoPAUkV2SeQ8</a>
        </div>

    </div>
    @endsection
