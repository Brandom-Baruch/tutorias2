@extends('layouts.app')

@section('titulo','Reestablecer contraseña docente')

@section('body-class','login-page sidebar-collapse')

@section('content')


<div class="page-header header-filter" style="background-image: url('{{asset('img/arbol_rojo.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form-horizontal" method="POST" action="{{ route('docente.password.request') }}">
                {{csrf_field()}}
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Reestablecer Contraseña del Docente</h4>
                  <div class="social-line">                 
                  </div>
                </div>
                <p class="text-center">Ingresa los siguientes datos</p>
                <div class="card-body">               

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
  
                    <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                          </span>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" 
                        id="password" name="password">
                    </div>
                        @if ($errors->has('password'))
                          <span class="help-block" style="color: red;">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif

                    <div class="input-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                          </span>
                        </div>
                        <input type="password" class="form-control" placeholder="Confirmar Contraseña" 
                        id="password_confirmation" name="password_confirmation">
                    </div>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block text-danger">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    <div class="form-group">
                        <div class="col-md-12 col-md-offset-4 text-center">
                            <button type="submit" class="btn btn-primary">
                                Reestablecer Contraseña
                            </button>
                        </div>
                    </div> 
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    @include('includes.footer')
</div>
@endsection

