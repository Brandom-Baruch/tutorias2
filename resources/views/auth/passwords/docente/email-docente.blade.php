@extends('layouts.app')

@section('titulo','Forgot password docente')

@section('body-class','login-page sidebar-collapse')

@section('content')


<div class="page-header header-filter" style="background-image: url('{{asset('img/arbol_rojo.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin: auto;">
                <div class="card card-nav-tabs">
                    <h4 class="card-header card-header-primary text-center">Restablecer Contraseña del Docente</h4>
                    <div class="card-body">
                        <h4 class="card-title text-center">Por favor coloca tu correo electronico</h4>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('docente.password.email') }}">
                            {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">mail</i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Correo electronico" 
                                  id="email" name="email" value="{{ old('email') }}">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif                                
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Enviar enlace de restablecimiento de contraseña
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@include('includes.footer')
</div>
@endsection

