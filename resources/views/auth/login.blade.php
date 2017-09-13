@extends('layouts.app')

@section('body')

<div class="flex-center position-ref full-height">
    <div class="container-fluid" >

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="title m-b-md">
                    <img src="{{ asset('images/ic_place_white_48dp_2x.png') }}" />
                        <a class="link-title" href="{{route('welcome')}}" style="font-size: 60px"> MiH<img src="{{ asset('images/ic_my_location_white_48dp_2x.png') }}" />gar.com</a>
                    </div>

                    <img class="rounded" src="{{ asset('images/hogarescomunitarios2.jpg') }}" style=" height: 250px; " />
                </div>
                @include('layouts.carousel_image', [
                    'title' => 'Titulo del mensaje',
                    'paragraph' => 'Parrafo del mensaje',
                    'url_image' => 'hogarescomunitarios2.jpg'
                ])

                @include('layouts.carousel_image', [
                    'title' => 'Titulo del mensaje',
                    'paragraph' => 'Parrafo del mensaje',
                    'url_image' => 'hogarescomunitarios2.jpg'
                ])

                @include('layouts.carousel_image', [
                    'title' => 'Titulo del mensaje',
                    'paragraph' => 'Parrafo del mensaje',
                    'url_image' => 'hogarescomunitarios2.jpg'
                ])

                @include('layouts.carousel_image', [
                    'title' => 'Titulo del mensaje',
                    'paragraph' => 'Parrafo del mensaje',
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
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12 col-md-offset-2" style="margin: 0 auto; padding: 5%">
                <div class="panel panel-default col-md-8" style="margin: 0 auto; ">
                    <div class="title m-b-md">Login</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Clave</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group" style="text-align: center;">
                                <div class="col-md-8 col-md-offset-4" style="display: inline-block;">
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size: 12px;">
                                        Olvido Su Clave?
                                </a>
                                </div>
                            </div>

                            <div class="form-group" style="text-align: center; justify-content: center;">
                                
                                
                                
                                <div class="col-md-8 col-md-offset-4" style="display: inline-block;">

                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
