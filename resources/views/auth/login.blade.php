@extends('layouts.app')

@section('body')
    
<div class="flex-center position-ref full-height">

    
    
    <div class="container-login container-fluid" >

        @component('layouts.carousel.carousel', ['items' => 2])
                  
           @include('layouts.carousel.carousel_item', [
                'active' => 'active',
                'route' => 'login',
                'url_image_prim' => 'mihogar.png',
                'url_image_sec' => 'hogarescomunitarios2.jpg'
            ]) 
            
            @include('layouts.carousel.carousel_item', [
                'active' => '',
                'route' => 'login',
                'url_image_prim' => 'mapa.png',
                'url_image_sec' => 'hogarescomunitarios2.jpg'
            ])        
                

        @endcomponent

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
