@extends('layouts.app')

@section('titulo','Cuestionario anexos')

@section('body-class','profile-page sidebar-collapse')

@section('opciones_alumno')
<a href="{{url('alumno/encuestas')}}" class="dropdown-item">Panel de entrevistas</a>
<a href="{{url('alumno')}}" class="dropdown-item">Panel de control</a>
@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{asset('img/mexico.png')}} ');"></div>
<div class="main main-raised">
  <div class="profile-content">
    <div class="container">      
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="profile" style="margin: 20px;">                                                     
          </div>
        </div>        
      </div>
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
      <div class="row ">      
        <ol start="1">
          @if(Auth::user()->cuestionario_anexo->atribucion)
          <li><a disable>Atribuciones</a></li>
          @else          
          <li><a href="{{url('alumno/cuestionario/atribuciones')}}">Atribuciones</a></li>                
          @endif
          @if(Auth::user()->cuestionario_anexo->nivel_empatia)
          <li><a disable>Niveles de empatía</a></li>           
          @else          
          <li><a href="{{url('alumno/cuestionario/nivel_empatia')}}">Niveles de empatía</a></li>
          @endif
          @if(Auth::user()->cuestionario_anexo->tipo_mentalidad)
          <li><a disable>Tipo de mentalidad</a></li>
          @else                        
          <li><a href="{{url('alumno/cuestionario/tipo_mentalidad')}}">Tipo de mentalidad</a></li>                                   
          @endif
        </ol>                            
        <div class="col-12 text-center">                                                                          
          <a href="{{url('/alumno/encuestas')}}" style="margin-top: 10px;" class="btn btn-danger">Regresar</a>                   
        </div>
      </div>                            
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
