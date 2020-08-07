@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="content col-md-12 ml-auto mr-auto">
            <div class="pb-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://brandpacks.com/wp-content/uploads/edd/2018/05/phone-repair-shop-tri-fold-brochure-template.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://brandpacks.com/wp-content/uploads/edd/2018/05/phone-repair-shop-tri-fold-brochure-template.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://brandpacks.com/wp-content/uploads/edd/2018/05/phone-repair-shop-tri-fold-brochure-template.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row" style="padding: 100px">
                    @foreach($companiesItem as $item)
                        <div class="col-md-3">
                            <a href="{{route('home.show.detail', $item->id)}}">
                                <div class="card card-cascade narrower">
                                    <div class="view view-cascade overlay">
                                        <img class="card-img-top" src="{{ url('img/media', $item->image) }}" alt="{{ $item->image }}">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <div class="card-body card-body-cascade">
                                        <h5 class="pink-text pb-2 pt-1"><i class="fas fa-utensils"></i>{{ $item->name }}</h5>
                                        <h6 class="font-weight-bold card-title">{{ $item->email }}</h6>
                                        <p class="card-text">{{ $item->phone }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


@endsection


