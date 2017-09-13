@extends('layouts.app')

@section('title', "MiHogar.com")

@section('body')

    <div class="flex-center position-ref full-height">

        <div class="container-fluid" >
            @component('layouts.carousel.carousel', ['items' => 5])
                
                    @include('layouts.carousel.carousel_item', [
                        'active' => 'active',
                        'route' => 'init',
                        'url_image_prim' => 'mihogar.png',
                        'url_image_sec' => 'hogarescomunitarios2.jpg'
                    ])

                    @include('layouts.carousel.carousel_item', [
                        'active' => '',
                        'route' => 'init',
                        'url_image_prim' => 'mapa.png',
                        'url_image_sec' => 'hogarescomunitarios2.jpg'
                    ])

                    @include('layouts.carousel.carousel_item', [
                        'active' => '',
                        'route' => 'init',
                        'url_image_prim' => 'PQRS.png',
                        'url_image_sec' => 'hogarescomunitarios2.jpg'
                    ])

                    @include('layouts.carousel.carousel_item', [
                        'active' => '',
                        'route' => 'init',
                        'url_image_prim' => 'preguntas.png',
                        'url_image_sec' => 'hogarescomunitarios2.jpg'
                    ])

                    @include('layouts.carousel.carousel_item', [
                        'active' => '',
                        'route' => 'init',
                        'url_image_prim' => 'comuniquese.png',
                        'url_image_sec' => 'hogarescomunitarios2.jpg'
                    ])
                
            @endcomponent
        </div>
    </div>
    
    
@endsection

@section('scripts')
    


@endsection

