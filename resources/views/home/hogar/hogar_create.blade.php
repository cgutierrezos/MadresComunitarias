@extends('layouts.app')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin: 0 auto; padding: 5%;">
            <div class="panel panel-default" style="margin: 0 auto;">
                <div class="panel-heading">Registrar Nuevo Hogar Comunitario</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('registerHogar') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre Del Hogar Comunitario</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dir') ? ' has-error' : '' }}">
                            <label for="dir" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-12">
                                <input id="dir" type="text" class="form-control" name="dir" value="{{ old('dir') }}" required>

                                @if ($errors->has('dir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('commentcomment') ? ' has-error' : '' }}">
                            <label for="comment" class="col-md-4 control-label">Comentarios</label>

                            <div class="col-md-12">
                                <textarea name="comment">Comentarios</textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
