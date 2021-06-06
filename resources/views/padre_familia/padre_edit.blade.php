@extends('layouts.app')

@section('titulo','Editar Padre de familia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_padre')
<a href="{{url('/padre_familia')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
	<div class="container">             
		<div class="section">
			<h2 class="title text-center" style="color:black;">
				Editando al señor(a) <b class="text-primary">{{Auth::user()->name}}</b>
			</h2>
			<form method="post" action="{{url('padre_familia/'.Auth::user()->id.'/edit')}}">
				{{ csrf_field() }}
				<div class="row">            
                  <div class="col-sm-4">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                          <label class="text-dark">Nombre(s)</label>
                          <input type="text" class="form-control"  
                                 placeholder="Escribe un nombre" 
                                 value="{{ old('name', Auth::user()->name) }}" 
                                 name="name">
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
                                 placeholder="Escribe un apellido paterno" 
                                 value="{{ old('apellidoP', Auth::user()->apellidoP) }}" 
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
                                 placeholder="Escribe un apellido materno" 
                                 value="{{ old('apellidoM', Auth::user()->apellidoM) }}"
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
                                 placeholder="Escribe una edad" 
                                 value="{{ old('edad', Auth::user()->edad) }}"
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
                                 value="{{ old('telefono_fijo' , Auth::user()->telefono_fijo) }}"
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
                                 value="{{ old('telefono_cel', Auth::user()->telefono_cel) }}"
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
                                 placeholder="Coloca un Curp" 
                                 value="{{ old('curp', Auth::user()->curp) }}" 
                                 name="curp" style="text-transform: uppercase;">
                        </div>
                        @if ($errors->has('curp'))
                            <span class="help-block text-center text-danger">
                                <strong>{{ $errors->first('curp') }}</strong>
                            </span>
                        @endif
                  </div>

                  <div class="col-sm-4">                          
                        <div class="form-group">          
                          <label class="text-dark">Estado Civil</label>
                            <select class="form-control " name="estado_civil" >
                              <option value="Casado(a)"
                               @if(old('estado_civil',Auth::user()->estado_civil) == 'Casado(a)')  selected @endif>
                               Casado(a)
                          	</option>
                              <option value="Soltero(a)"
                               @if(old('estado_civil',Auth::user()->estado_civil) == 'Soltero(a)')  selected @endif>
                          	 Soltero(a)
                          	</option>                                
                            </select>
                        </div>                          
                  </div>

                  <div class="col-sm-4">                          
                        <div class="form-group{{ $errors->has('escolaridad') ? ' has-error' : '' }}">          
                          <label class="text-dark">Escolaridad</label>
                            <select class="form-control " name="escolaridad" >
                              <option value="Primaria"
                               @if(old('escolaridad',Auth::user()->escolaridad) == 'Primaria')  selected @endif>
                               Primaria
                              </option>
                              <option value="Secundaria"
                               @if(old('escolaridad',Auth::user()->escolaridad) == 'Secundaria')  selected @endif>
                               Secundaria
                              </option>
                              <option value="Preparatoria"
                               @if(old('escolaridad',Auth::user()->escolaridad) == 'Preparatoria')  selected @endif>
                               Preparatoria
                               </option>
                              <option value="Universidad"
                               @if(old('escolaridad',Auth::user()->escolaridad) == 'Universidad')  selected @endif>
                               Universidad
                              </option>
                            </select>
                        </div>                        
                  </div>

                  <div class="col-sm-4">
                      <div class="form-group {{ $errors->has('ocupacion') ? ' has-error' : '' }}">
                        <label class="text-dark">Ocupación</label>
                        <input type="text" class="form-control" 
                               placeholder="Escribe una ocupación"
                               value="{{ old('ocupacion', Auth::user()->ocupacion) }}"
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
                               placeholder="Escribe una profesión"
                               value="{{ old('profesion', Auth::user()->profesion) }}"
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
                        <label class="text-dark">Correo electrónico</label>
                        <input type="email" class="form-control"  
                               placeholder="Escribe un correo electrónico" 
                               value="{{ old('email', Auth::user()->email) }}"
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
                                 placeholder="Escribe una contraseña"
                                 name="password"
                                 
                          >
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
                                 placeholder="Confirme la  contraseña" 
                                 name="password_confirmation"
                          >                          
                        </div>                          
                    </div>
                    <div class="col-sm-4">
                        <small  class="form-text  text-dark">
                            Si no quiere cambiar la contraseña, deje vacio los campos 
                            <b class="text-danger">Contraseña y Confirmar contraseña</b>.
                        </small>
                    </div>
                    <div class="col-sm-4">
                        <small>Formato para teléfono fijo y celular : <b class="text-danger">123-123-1234</b></small><br>
                        <small>Si solamente tiene un numero telefónico, colócalo en las dos opciones</small>
                    </div>                  
              	</div>
				<div class="col-md-12 text-center">
					<button class="btn btn-success">Editar datos</button>
					<a href="{{url('padre_familia')}}" class="btn btn-danger">Cancelar</a> 
				</div>
			</form>                  
		</div>              
	</div>
</div>
@include('includes.footer')
@endsection
