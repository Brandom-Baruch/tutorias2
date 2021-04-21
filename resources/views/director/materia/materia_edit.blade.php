@extends('layouts.app')

@section('titulo','Editar Materia '. $materia->name)

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
            <h2 class="title text-center" style="color:black;">Editar materia <b class="text-primary">{{$materia->name}}</b></h2>    
             <form method="post" action="{{url('/director/materia/'.$materia->id.'/edit')}}">
                {{ csrf_field() }}
                <div class="row">            
                  <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                      <label class="text-dark">Nombre de la materia</label>
                      <input type="text" class="form-control"
                             placeholder="Escribe el nombre de la materia" 
                             value="{{ old('name',$materia->name) }}" 
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
                             value="{{ old('clave',$materia->clave) }}"
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
                  <textarea class="form-control" rows="1" name="descripcion">{{ $materia->descripcion }}</textarea>
                  @if ($errors->has('descripcion'))
                    <span class="help-block text-center text-danger">
                     <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-success">Editar Materia</button>
                    <a href="{{url('director/materias/index')}}" class="btn btn-danger">Cancelar</a> 
                </div>

             </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
