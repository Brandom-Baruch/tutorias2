@extends('layouts.app')

@section('titulo','Agregar materia')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_director')    

  @include('includes.links_director')
  <a href="{{url('docente')}}" class="dropdown-item">Panel de control</a>  

@endsection

@section('content')

<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="container">             
    <div class="section">
      <h2 class="title text-center" style="color:black;">Registrar nueva Materia</h2>
      @if (session('mensaje')) <!--Si existe un mensaje, mostrara el contenido del mensaje-->             
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
      <form method="post" action="/director/materia/create">
        {{ csrf_field() }}
        <div class="row">            
          <div class="col-sm-6">
            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
              <label class="text-dark">Nombre de la materia</label>
              <input type="text" class="form-control"
                     placeholder="Escribe el nombre de la materia" 
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
          <div class="col-sm-6">
            <div class="form-group {{ $errors->has('clave') ? ' has-error' : '' }}">
              <label class="text-dark">Clave de la materia</label>
              <input type="text" class="form-control" 
                     placeholder="Escribe la clave de la materia" 
                     value="{{ old('clave') }}"
                     name="clave" style="text-transform: uppercase;"
              >
            </div>
            @if ($errors->has('clave'))
              <span class="help-block text-center text-danger">
                <strong>{{ $errors->first('clave') }}</strong>
              </span>
            @endif
          </div>                                           
        </div>
        <div class="form-group">
          <label class="text-dark">Descripción de la materia</label>
          <textarea class="form-control" rows="1" name="descripcion"
            placeholder="Coloca una descripción corta">{{ old('descripcion') }}</textarea>
          @if ($errors->has('descripcion'))
            <span class="help-block text-center text-danger">
             <strong>{{ $errors->first('descripcion') }}</strong>
            </span>
          @endif
        </div>
       <div class="col-md-12 text-center">
          <button class="btn btn-success">Registrar Materia</button>
          <a href="{{url('director/materias/index')}}" class="btn btn-danger">Cancelar</a> 
       </div>
      </form>                  
   </div>              
 </div>
</div>
@include('includes.footer')
@endsection
