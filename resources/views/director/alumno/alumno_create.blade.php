@extends('layouts.app')

@section('titulo','Agregar Alumno')

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
      <h2 class="title text-center" style="color:black;">Registrar nuevo Alumno</h2><br>
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
      <form method="post" action="/director/alumno/create">
        {{ csrf_field() }}
        <div class="row"> 
          <div class="col-sm-4">
            <div class="form-group {{ $errors->has('nia') ? ' has-error' : '' }}">
              <label class="text-dark">NIA</label>
              <input type="number" class="form-control" id="nia" 
                     placeholder="Coloca un NIA" 
                     value="{{ old('nia') }}" 
                     name="nia"
              >
            </div>

            @if ($errors->has('nia'))
              <span class="help-block text-danger">
                <strong>{{ $errors->first('nia') }}</strong>
              </span>
            @endif
          </div>
          <div class="col-sm-4">
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
              <label class="text-dark">Nombre(s)</label>
              <input type="text" class="form-control" 
                     placeholder="Escribe un nombre/s" 
                     value="{{ old('name') }}" 
                     name="name"
              >
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
              <input type="text" class="form-control" id="apellidoP" 
                     placeholder="Escribe un apellido paterno" 
                     value="{{ old('apellidoP') }}" 
                     name="apellidoP"
              >                     
            </div>

            @if ($errors->has('apellidoP'))
              <span class="help-block text-center text-danger">
                <strong>{{ $errors->first('apellidoP') }}</strong>
              </span>
            @endif
          </div>

          <div class="col-sm-4">
            <div class="form-group {{ $errors->has('apellidoM') ? ' has-error' : '' }}">
              <label >Apellido Materno</label>
              <input type="text" class="form-control"
                     placeholder="Escribe un apellido materno" 
                     value="{{ old('apellidoM') }}"
                     name="apellidoM"
              >
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
                     value="{{ old('edad') }}"
                     name="edad"
              >
            </div>

            @if ($errors->has('edad'))
              <span class="help-block text-center text-danger">
                <strong>{{ $errors->first('edad') }}</strong>
              </span>
            @endif
          </div>

          <div class="col-sm-4">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
              <label class="text-dark">Correo electronico</label>
              <input type="email" class="form-control"
                     placeholder="Escribe un correo electrónico" 
                     value="{{ old('email') }}"
                     name="email"   
              >
            </div>

            @if ($errors->has('email'))
              <span class="help-block text-center text-danger">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>
                  

          <div class="col-sm-4">
            <div class="form-group{{ $errors->has('grupo_id') ? ' has-error' : '' }}">          
              <label class="text-dark">Grupo</label>
              <select class="form-control " name="grupo_id" >
                <option value="0">Sin grupo</option>
                @foreach($grupos as $grupo)
                <option value="{{$grupo->id}}">{{$grupo->name}}</option>
                @endforeach
              </select>
            </div>

            @if ($errors->has('grupo_id'))
              <span class="help-block text-center text-danger">
                <strong>{{ $errors->first('grupo_id') }}</strong>
              </span>
            @endif
          </div>

          <div class="col-sm-4">
            <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">          
              <label class="text-dark">Genero</label>
              <select class="form-control " name="genero" >
                <option value="H">H</option>
                <option value="M">M</option>                                
              </select>
            </div>

            @if ($errors->has('genero'))
              <span class="help-block text-center text-danger">
                <strong>{{ $errors->first('genero') }}</strong>
              </span>
            @endif
          </div>

          <div class="col-sm-4">
            <div class="form-group {{ $errors->has('fechaN') ? ' has-error' : '' }}">
              <label class="text-dark">fecha de nacimiento</label>
              <input type="date" class="form-control"
                     placeholder="Coloca la fecha de nacimiento" 
                     value="{{ old('fechaN') }}"
                     name="fechaN"
              >                            
            </div>

            @if ($errors->has('fechaN'))
              <span class="help-block text-center text-danger">
                <strong>{{ $errors->first('fechaN') }}</strong>
              </span><br>
            @endif
          </div>

          <div class="col-sm-4">
            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
              <label class="text-dark">Teléfono</label>
              <input type="tel" class="form-control"
                     pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"                                   
                     placeholder="Escribe un teléfono celular/fijo"                      
                     value="{{ old('phone') }}"
                     name="phone"
              >
            </div>

            @if ($errors->has('phone'))
              <span class="help-block text-center text-danger">
                <strong>{{ $errors->first('phone') }}</strong>
              </span><br>
            @endif
            <small>Formato para teléfono celular/fijo : <b class="text-danger">123-123-1234</b></small>
          </div>        

          <div class="col-sm-4">
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
              <label class="text-dark">Contraseña</label>
              <input type="password" class="form-control" 
                     placeholder="Escribe una contraseña"
                     name="password" 
                     value="secret"
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
              <input type="password" class="form-control" id="password-confirm" 
                     placeholder="Confirmar contraseña" 
                     name="password_confirmation"
                     value="secret">
              <small  class="form-text text-muted">La contraseña por defecto es <b class="text-danger">secret</b></small>           
            </div>                          
          </div>
        </div>                                                                                        

        <div class="text-center col-md-12">
          <button class="btn btn-success">Registrar docente</button>
          <a href="{{url('director/alumnos/index')}}" class="btn btn-danger">Cancelar</a>   
        </div>
      </form>                  
    </div>              
  </div>
</div>
@include('includes.footer')
@endsection
