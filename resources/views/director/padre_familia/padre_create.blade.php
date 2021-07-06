@extends('layouts.app')

@section('titulo','Agregar Padre de familia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}">Panel de control</a>  

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
    <div class="container">             
        <div class="section">
          <h2 class="title text-center" style="color:black;">Registrar nuevo Padre de familia</h2><br>
          @if (session('mensaje'))
            <div class="alert alert-success text-left">
              <div class="container-fluid">
                <div class="alert-icon">
                  <i class="material-icons">check</i>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true"><i class="material-icons">clear</i></span>
                </button>
                {{ session('mensaje') }}
              </div>
            </div>
          @endif
          <form method="post" action="{{ url('/director/padre_familia/create') }}">
            {{ csrf_field() }}
            <div class="row">            
                <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="text-dark" class="text-dark">Nombre(s)</label>
                        <input type="text" class="form-control"                        
                               placeholder="Coloca el nombre" 
                               value="{{ old('name') }}" name="name">
                      </div>
                      @if ($errors->has('name'))
                          <span class="help-block text-danger">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                </div>

               <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('apellidoP') ? ' has-error' : '' }}">
                        <label class="text-dark">Apellido Paterno</label>
                        <input type="text" class="form-control" 
                               placeholder="Coloca el apellido paterno" 
                               value="{{ old('apellidoP') }}" 
                               name="apellidoP">                     
                      </div>
                      @if ($errors->has('apellidoP'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('apellidoP') }}</strong>
                          </span>
                      @endif
                </div>
                
                <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('apellidoM') ? ' has-error' : '' }}">
                        <label class="text-dark">Apellido Materno</label>
                        <input type="text" class="form-control" 
                               placeholder="Coloca el apellido materno" 
                               value="{{ old('apellidoM') }}"
                               name="apellidoM">
                      </div>
                      @if ($errors->has('apellidoM'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('apellidoM') }}</strong>
                          </span>
                      @endif
                </div>                      

                 <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('edad') ? ' has-error' : '' }}">
                        <label class="text-dark">Edad</label>
                        <input type="number" class="form-control" 
                               placeholder="Ejemplo: 21" 
                               value="{{ old('edad') }}"
                               name="edad">
                      </div>
                      @if ($errors->has('edad'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('edad') }}</strong>
                          </span>
                      @endif
                </div>
         
                <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('telefono_fijo') ? ' has-error' : '' }}">
                        <label class="text-dark">Teléfono fijo</label>
                        <input type="tel" class="form-control"
                               pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" 
                               placeholder="Formato: 123-123-1234" 
                               value="{{ old('telefono_fijo') }}"
                               name="telefono_fijo">
                      </div>
                      @if ($errors->has('telefono_fijo'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('telefono_fijo') }}</strong>
                          </span>
                      @endif
                </div>                  

                <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('telefono_cel') ? ' has-error' : '' }}">
                        <label class="text-dark">Teléfono celular</label>
                        <input type="tel" class="form-control" 
                               pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                               placeholder="Formato: 123-123-1234" 
                               value="{{ old('telefono_cel') }}"
                               name="telefono_cel">
                      </div>
                      @if ($errors->has('telefono_cel'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('telefono_cel') }}</strong>
                          </span>
                      @endif
                </div>                 

                <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('curp') ? ' has-error' : '' }}">
                        <label class="text-dark">Curp</label>
                        <input type="text" class="form-control"
                               placeholder="Coloca la curp" 
                               value="{{ old('curp') }}" 
                               name="curp" style="text-transform: uppercase;">
                      </div>
                      @if ($errors->has('curp'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('curp') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="col-sm-4">                          
                      <div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">          
                        <label class="text-dark">Estado Civil</label>
                          <select class="form-control " name="estado_civil" >
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Soltero(a)">Soltero(a)</option>                                
                          </select>
                      </div>

                      @if ($errors->has('estado_civil'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('estado_civil') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="col-sm-4">                          
                      <div class="form-group{{ $errors->has('escolaridad') ? ' has-error' : '' }}">          
                        <label class="text-dark">Escolaridad</label>
                          <select class="form-control " name="escolaridad" >
                            <option value="Primaria">Primaria</option>
                            <option value="Secundaria">Secundaria</option>
                            <option value="Preparatoria">Preparatoria</option>
                            <option value="Universidad">Universidad</option>
                          </select>
                      </div>

                      @if ($errors->has('estado_civil'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('estado_civil') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="col-sm-4">
                    <div class="form-group {{ $errors->has('ocupacion') ? ' has-error' : '' }}">
                      <label class="text-dark">Ocupación</label>
                      <input type="text" class="form-control" 
                             placeholder="Ejemplo: Artesano"
                             value="{{ old('ocupacion') }}"
                             name="ocupacion">
                    </div>
                    @if ($errors->has('ocupacion'))
                        <span class="help-block text-center text-danger">
                            <strong>{{ $errors->first('ocupacion') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <div class="form-group {{ $errors->has('profesion') ? ' has-error' : '' }}">
                      <label class="text-dark">Profesión</label>
                      <input type="text" class="form-control" 
                             placeholder="Ejemplo: Cientifico"
                             value="{{ old('profesion') }}"
                             name="profesion">
                    </div>
                    @if ($errors->has('profesion'))
                        <span class="help-block text-center text-danger">
                            <strong>{{ $errors->first('profesion') }}</strong>
                        </span>
                    @endif
                </div>

       	      	<div class="col-sm-4">
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                      <label class="text-dark">Correo electronico</label>
                      <input type="email" class="form-control" 
                             placeholder="Coloca el correo electrónico" 
                             value="{{ old('email') }}"
                             name="email">
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block text-center text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="text-dark">Contraseña</label>
                        <input type="password" class="form-control" 
                               placeholder="Por defecto es: secret"
                               name="password" 
                               value="secret">
                      </div>
                      @if ($errors->has('password'))
                          <span class="help-block text-center text-danger">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                </div>

                <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="text-dark">Confirmar contraseña</label>
                        <input type="password" class="form-control"  
                               placeholder="Por defecto es: secret" 
                               name="password_confirmation"
                               value="secret">
                          <small  class="form-text text-muted">La contraseña por defecto es <b class="text-danger">secret</b></small>
                      </div>                          
                </div>

                <div class="col-sm-4">
                    <p>Formato para teléfono fijo y celular : <b class="text-danger">123-123-1234</b></p>
                    <p>Si solamente tiene un numero telefónico, colócalo en las dos opciones</p>
                </div>
            </div>                                                                                                  
            <div class="col-md-12 text-center">
                <button class="btn btn-success">Registrar padre</button>
                <a href="{{url('director/padres_familia/index')}}" class="btn btn-danger">Cancelar</a> 
            </div>
          </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
