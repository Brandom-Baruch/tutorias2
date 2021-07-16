@extends('layouts.app')

@section('titulo','Test')

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
          @if(Auth::user()->test->conociendo_estilo_aprendizaje)
            <li><a disabled>Conociendo los estilos de aprendizaje</a></li>
          @else              
            <li><a href="{{url('alumno/test/conociendo_estilos_aprendizaje')}}">Conociendo los estilos de aprendizaje</a></li>     
          @endif          
          @if(Auth::user()->test->encontrar_estilo_aprendizaje)
            <li><a disabled>Encontrar estilo de aprendizaje</a></li>
          @else              
            <li><a href="{{url('alumno/test/encontrar_estilo_aprendizaje')}}">Encontrar estilo de aprendizaje</a></li>
          @endif              
          <li>            
            @if(empty(Auth::user()->test->test_habito_estudio))
              <form method="post" action="{{url('alumno/test/habitos_estudio')}}">
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary btn-sm">hábitos de estudio</button>
              </form>                                                  
            @elseif(Auth::user()->test->test_habito_estudio->where('descripcion','Inicio habito de estudio')->first())
              <a href="{{url('/alumno/test/habitos_estudio')}}" class="btn btn-warning btn-sm">{{Auth::user()->test->test_habito_estudio->descripcion}}</a>
            @elseif(Auth::user()->test->test_habito_estudio->where('descripcion','Finalizo habito de estudio')->first())
              <a disabled>{{Auth::user()->test->test_habito_estudio->descripcion}}</a>                        
            @endif
          </li>
          <!--<li><a href="{{url('alumno/test/habitos_estudio')}}">hábitos de estudio</a></li>-->
        </ol>             
        <div class="col-md-12 text-center"> 
          <a href="{{url('/alumno/encuestas')}}" class="btn btn-danger">Regresar</a>                                                
        </div>
      </div>                             
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
