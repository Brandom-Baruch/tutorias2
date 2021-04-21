@extends('layouts.app')

@section('titulo','Editar Grupo')

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
            <h2 class="title text-center" style="color:black;">Editar Grupo <b class="text-primary">{{$grupo->name}}</b></h2>
            @if($errors->any())
                <div class="alert alert-danger">
                    <div class="container-fluid">                     
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                      </button>
                      <ul>    
                          @foreach($errors->all() as $error)                        
                          <li>{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                </div>
            @endif 
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
            <form method="post" action="{{url('director/grupo/'.$grupo->id.'/edit')}}">
              {{csrf_field()}}
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label class="text-dark">Nombre</label>
                  <input type="text" class="form-control" 
                         placeholder="Escribe un nombre para el grupo" 
                         name="name" 
                         value="{{old('name',$grupo->name)}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class="text-dark">Grado</label>
                  <input type="text" class="form-control" 
                         placeholder="Escribe el grado del grupo" 
                         name="grado"
                         value="{{old('grado',$grupo->grado)}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class="text-dark">Grupo</label>
                  <input type="text" class="form-control"  
                         placeholder="Ejemplo: A" 
                         name="grupo" 
                         value="{{old('grupo',$grupo->grupo)}}">
                </div>
                <div class="form-group col-md-4">
                  <label class="text-dark">Semestre</label>
                  <input type="text" class="form-control" 
                         placeholder="Escribe el semestre del grupo" 
                         name="semestre"
                         value="{{old('semestre',$grupo->semestre)}}"
                  >
                </div>
                <div class="form-group col-md-4">
                  <label class="text-dark">Año</label>
                  <input type="text" class="form-control"  
                         placeholder="Escribe el año del grupo" 
                         name="year"
                         value="{{old('year',$grupo->year)}}">
                </div>                
              </div>              
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">Editar Grupo</button>
                <a href="{{url('director/grupos/index')}}" class="btn btn-danger">Cancelar</a>                
              </div>
            </form>                  
        </div>              
    </div>
</div>
@include('includes.footer')
@endsection
