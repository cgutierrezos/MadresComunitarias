@extends('layouts.app')

@section('title', "MiHogar.com")

@section('body')

    <div class="flex-center position-ref full-height">

        <div class="container-fluid" >
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="title m-b-md">
                        <img src="{{ asset('images/ic_place_white_48dp_2x.png') }}" />
                            <a class="link-title" href="{{route('welcome')}}"> MiH<img src="{{ asset('images/ic_my_location_white_48dp_2x.png') }}" />gar.com</a>
                        </div>
                            
                        <div class="links" style=" height: 50px;">
                            <a href="{{route('map')}}"><img src="{{ asset('images/ic_map_white_48dp_2x.png') }}" style="height: 23px;" />Mapa de hogares</a>
                            <a href="{{route('map')}}"><img src="{{ asset('images/ic_report_problem_white_48dp_2x.png') }}" style="height: 23px;" /> Queja o Reclamo</a>
                            <a href="{{route('map')}}"><img src="{{ asset('images/ic_help_outline_white_48dp_2x.png') }}" style="height: 23px;" /> Preguntas</a>
                            <a href="{{route('map')}}"><img src="{{ asset('images/ic_business_white_48dp_2x.png') }}" style="height: 23px;" /> Comuniquese</a>
                        </div>
                        <img class="rounded" src="{{ asset('images/hogarescomunitarios2.jpg') }}" style="width: 600px; height: 250px; " />
                    </div>
                    
                    @include('layouts.carousel_item', [
                        'title' => 'Mapa De Hogares',
                        'img_title' => 'ic_map_white_48dp_2x.png',
                        'route_title' => 'map',
                        'url_image' => 'hogarescomunitarios2.jpg'
                    ])

                    @include('layouts.carousel_item', [
                        'title' => 'Queja O Reclamo',
                        'img_title' => 'ic_report_problem_white_48dp_2x.png',
                        'route_title' => 'map',
                        'url_image' => 'hogarescomunitarios2.jpg'
                    ])

                    @include('layouts.carousel_item', [
                        'title' => 'Preguntas',
                        'img_title' => 'ic_help_outline_white_48dp_2x.png',
                        'route_title' => 'map',
                        'url_image' => 'hogarescomunitarios2.jpg'
                    ])

                    @include('layouts.carousel_item', [
                        'title' => 'Comuniquese',
                        'img_title' => 'ic_business_white_48dp_2x.png',
                        'route_title' => 'map',
                        'url_image' => 'hogarescomunitarios2.jpg'
                    ])
                    
                    
                    
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="3"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="4"></li>
                </ol>
                
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    
    
@endsection

@section('scripts')
    


@endsection

